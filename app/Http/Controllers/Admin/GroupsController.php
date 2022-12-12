<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Group;
use App\Models\Record;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class GroupsController extends Controller
{
    
    public function __construct(){
        
        $this->middleware('can:admin.groups.index')->only('index');
        $this->middleware('can:admin.groups.create')->only('create', 'store');
        $this->middleware('can:admin.groups.edit')->only('edit', 'update');
        $this->middleware('can:admin.groups.destroy')->only('destroy');
    }

    public function index()
    {
        $groups = Group::all();

        return view('admin.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::select('users.name', 'users.id')
                        ->join('model_has_roles', 'users.id', '=', 'model_id')
                        ->where('role_id', '=', 3)
                        ->pluck('users.name', 'users.id');

        $courses = DB::table('courses')
                        ->select('name', 'id')
                        ->pluck('name', 'id');

        return view('admin.groups.create', compact('usuarios', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'schedule' => 'required',
            'teacher' => 'required',
            'course' => 'required',
            
        ]);

        if ($request->schedule == 0) {

            $course = Course::find(request('course', null));

            $teacher = User::find(request('teacher', null));

            //dd($teacher);
            
            $group = Group::create([
                'name' => request('name', null),
                'schedule' => 'Mañana',
                'teacher' => $teacher->name,
                'course' => $course->name,
                'course_id' => request('course', null),
                'teacher_id' => request('teacher', null)
            ]);

            return redirect()->route('admin.groups.edit', $group)->with('info', 'The group was successfully created');
        } elseif ($request->schedule == 1) {

            $course = Course::find(request('course', null));

            $teacher = User::find(request('teacher', null));

            //dd($teacher);
            
            $group = Group::create([
                'name' => request('name', null),
                'schedule' => 'Tarde',
                'teacher' => $teacher->name,
                'course' => $course->name,
                'course_id' => request('course', null),
                'teacher_id' => request('teacher', null)
            ]);
            return redirect()->route('admin.groups.edit', $group)->with('info', 'The group was successfully created');
        }

        $course = Course::find(request('course', null));

        $teacher = User::find(request('teacher', null));

            //dd($teacher);
            
        $group = Group::create([
            'name' => request('name', null),
            'schedule' => 'Noche',
            'teacher' => $teacher->name,
            'course' => $course->name,
            'course_id' => request('course', null),
            'teacher_id' => request('teacher', null)
        ]);
            
        return redirect()->route('admin.groups.edit', $group)->with('info', 'The group was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {

        //dd($group);
        $usuarios = User::select('users.name', 'users.id')
                        ->join('model_has_roles', 'users.id', '=', 'model_id')
                        ->where('role_id', '=', 3)
                        ->pluck('users.name', 'users.id');

        $courses = DB::table('courses')
                        ->select('name', 'id')
                        ->pluck('name', 'id');

        return view('admin.groups.edit', compact('group', 'usuarios', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required',
            'schedule' => 'required',
            'teacher' => 'required',
            'course' => 'required',
            
        ]);

        $group = Group::find($request->group->id);

        $group->update($request->all());


        return redirect()->route('admin.groups.edit', $group)->with('info', 'The group was successfully updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Group $group)
    {
        $group = Group::find($request->group->id);

        $group->delete();

        return redirect()->route('admin.groups.index')->with('info', 'The group was successfully deleted');;
    }

    public function asignar_students(){

        $usuarios = User::select('users.name', 'users.id')
                        ->join('model_has_roles', 'users.id', '=', 'model_id')
                        ->where('role_id', '=', 2)
                        ->get();

        $groups = DB::table('groups')
                        ->select('name', 'id')
                        ->pluck('name', 'id');

        return view('admin.groups.asignar', compact('usuarios', 'groups'));
    }

    public function asignar(Request $request){

        // dd($request);
        
        try {
            
            $group = request('group', null);
            $asignados = request('list_students', null);

            $group = Group::where('id', request('group', null))->first();
            $course = Course::where('name', $group->course)->first();

            /* $record = Record::where('id_user', )
                                ->where('id_course', $course->id)->first(); */

            // dd($record);
            // dd($course);
            // dd($group);
            // dd($asignados);

            foreach($asignados as $asignado){

                $i = 0;
                $record = Record::where('id_user', $asignado)
                                ->where('id_course', $course->id)->first();
                $cont = DB::table('group_user')
                            ->where('group_id', request('group', null))
                            ->where('user_id', $asignado)->count();

                // dd($cont);
                // dd($record);

                if($cont == 0){

                    if(is_null($record)){
                        // dd('hola 1');
                        $group->users()->attach($asignado);
    
                        Record::create([
                            'id_user' => $asignado,
                            'id_course' => $course->id,
                            'num_viewd' => $i
                        ]);
                    } elseif($record->num_viewd == 0){
                        // dd($record);
    
                        $group->users()->attach($asignado);
    
                        $record->num_viewd = $i+1;
                        $record->save();
                    } elseif($record->num_viewd == 1){
                        // dd('hola 3');
    
                        $group->users()->attach($asignado);
    
                        $record->num_viewd = $i+2;
                        $record->save();
                    }
                }

                // return response()->json('user ya registrado');

            }

            return response()->json('sucess');

        } catch (Exception $th) {
            dd($th);
        }
    }

    public function listStudents(Request $request){

        /* $usuarios = User::select('users.name', 'users.id')
                        ->join('model_has_roles', 'users.id', '=', 'model_id')
                        ->where('role_id', '=', 3)
                        ->pluck('users.name', 'users.id'); */

        $group = Group::find($request->id);

        $name_group = $group->name;
        $name_teacher = $group->teacher;

        $students = $group->users;

        return view('admin.groups.list_student', compact('students', 'name_group', 'name_teacher'));
    }

}
