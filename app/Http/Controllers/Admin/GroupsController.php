<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $usuarios = DB::table('users')
                        ->select('name', 'id')
                        ->pluck('name', 'name');

        $courses = DB::table('courses')
                        ->select('name', 'id')
                        ->pluck('name', 'name');

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
        /* dd($request); */
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'schedule' => 'required'
        ]);

        $group = Group::create([
            'name' => request('name', null),
            'course' => request('course', null),
            'schedule' => request('schedule', null)
        ]);

        return redirect()->route('admin.groups.edit', $group)->with('info', 'The group was successfully created');;
    
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
        $usuarios = DB::table('users')
                        ->select('name', 'id')
                        ->pluck('name', 'name');
        
        $courses = DB::table('courses')
                        ->select('name', 'id')
                        ->pluck('name', 'name');

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
            'teacher' => 'required',
            'course' => 'required'
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
                        ->pluck('name', 'name');

        return view('admin.groups.asignar', compact('usuarios', 'groups'));
    }

    public function asignar(Request $request){

        /* dd($request); */
        
        try {
            
            $group = request('group', null);
            $asignados = request('list_students', null);

            $groups = Group::where('name', request('group', null))->first();

            //dd($groups);

            foreach($asignados as $asignado){

                Group::create([
                    'name' => $group,
                    'schedule' => $groups->schedule,
                    'group' => $group,
                    'students' => $asignado
                ]);
            }

            return redirect()->route('admin.groups.create')->with('info', 'The assignement was successfully');

        } catch (Exception $th) {
            return $th;
        }
    }
}
