<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

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
}
