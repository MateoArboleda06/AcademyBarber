<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class GroupController extends Controller
{
    public function index()
    {

        $groups = Group::all();

        return view('groups.indexGroup', compact('groups'));
    }

    public function create()
    {
        return view('groups.createGroup');
    }

    public function show($id)
    {

        $group = Group::find($id);

        return view('groups.showGroup', compact('group'));
    }

    public function edit($id){

        $group = Group::find($id);

        return view('groups.editGroup', compact('group'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        /*$curso = new Curso();

        $curso->name = $request->name;
        $curso->profesor = $request->profesor;
        $curso->description = $request->description;
        $curso->semestre = $request->semestre;

        $curso->save(); */
        
        $group = Group::create($request->all());
        
        return redirect()->route('group.show', $group);
    }

    public function update($id, Request $request){

        $request->validate([
            'name' => 'required',
        ]);

        $group = Group::find($id);

        /*$curso->name = $request->name;
        $curso->profesor = $request->profesor;
        $curso->description = $request->description;
        $curso->semestre = $request->semestre;

        $curso->save(); */

        $group->update($request->all());

        return redirect()->route('group.show', $group);

    }

    public function destroy($id){

        $group = Group::find($id);

        $group->delete();

        return redirect()->route('group.index');
    }

    public function assignmentTeacher($id){
        $group = Group::find($id);

        return view('groups.assignmentTGroup', compact('group'));
    }

    public function assignmentUpTeacher($id, Request $request){

        $request->validate([
            'teacher' => 'required'
        ]);

        $group = Group::find($id);

        $group->update($request->all());

        return redirect()->route('group.show', $group);
    }

}
