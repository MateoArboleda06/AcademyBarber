<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Ratings;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    
    public function index()
    {
        $groups = Group::where('teacher', auth()->user()->name)->get();

        // dd($groups);

        return view('teacher.index', compact('groups'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $rating = Ratings::where('id_user', $request->invisible_student)
                            ->where('id_group', $request->invisible_group)->first();

        // dd($rating);
        // dd($request);
        $rating->tracing = $request->tracing;
        $rating->partial_one = $request->partial_one;
        $rating->partial_two = $request->partial_two;

        $rating->save();
        /* Ratings::create([
            'id_user' => request('invisible_student', null),
            'id_group' => request('invisible_group', null),
            'tracing' => request('tracing', null),
            'partial_one' => request('partial_one', null),
            'partial_two' => request('partial_two', null)
        ]); */

        return redirect()->route('teacher.show', $request->invisible_group)->with('info', 'The notes have been uploaded successfully');
    }
   
    public function show($id)
    {
        // dd($id);
        $group = Group::find($id);
        $records = Record::all();
        $ratings = Ratings::all();
        // dd($records);

        $name_group = $group->name;
        // dd($group);
        $students = $group->users;

        // dd($students);

        return view('teacher.show', compact('group', 'students', 'name_group', 'records','ratings'));
    }

    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function tracing($id, $id_g){

        $student = User::find($id);
        $group = Group::find($id_g);
        $traicing = Ratings::where('id_user', $id)
                            ->where('id_group', $id_g)->first();

        // dd($traicing);

        return view('teacher.tracing', compact('student','group','traicing'));
    }

    public function tracingEdit(Request $request){

        // dd($request);

        $rating = Ratings::where('id_user', $request->invisible_student)
                            ->where('id_group', $request->invisible_group)->first();

        // dd($rating);
        $rating->tracing = $request->tracing;
        $rating->partial_one = $request->partial_one;
        $rating->partial_two = $request->partial_two;

        $rating->save();

        $group = Group::find($request->invisible_group);

        $name_group = $group->name;
        // dd($group);
        $students = $group->users;
                            
        return Redirect::back()->with('info', 'Changes made successfully');
    }

    public function final(Request $request){

        $rating = Ratings::where('id_user', $request->id_user)
                            ->where('id_group', $request->id_group)->first();

        // dd($request);

        /* if(is_null($rating)){
            Ratings::create([
                'id_user' => request('id_user', null),
                'id_group' => request('id_group', null),
                'tracing' => request('tracing', null),
                'partial_one' => request('partial_one', null),
                'partial_two' => request('partial_two', null),
                'final' => request('final', null),
                'status' => request('status', null)
            ]);

            return response()->json('success');
        } */

        // dd('hola');

        $rating->final = $request->final;
        $rating->status = $request->status;

        $rating->save();
                            
        return response()->json('success');
    }

    public function endCourse(Request $request){

        // dd($request->list_students[0]['name']); 
        
        foreach ($request->list_students as $student) {

            // dd($student['id']);

            DB::table('group_user')->where('group_id', request('id_group', null))
                                    ->where('user_id', $student['id'])->delete();

            Ratings::where('id_group', request('id_group', null))
                    ->where('id_user', $student['id'])->delete();
            
        }

        // $student = DB::table('group_user')->where('group_id', request('id_group', null))->delete();

        return response()->json('success');
    }
}
