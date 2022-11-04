<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() { 

        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function create() {
        return view('courses.create');
    }

    public function show($id) {

        $course = Course::find($id);

        return view('courses.show', compact('course'));
    }

    public function edit($id){

        $course = Course::find($id);

        return view('courses.edit', compact('course'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'semester'=> 'required',
        ]);

        /*$curso = new Curso();

        $curso->name = $request->name;
        $curso->profesor = $request->profesor;
        $curso->description = $request->description;
        $curso->semestre = $request->semestre;

        $curso->save(); */

       $course = Course::create($request->all());

        return redirect()->route('course.show', $course);
    } 

     public function update($id, Request $request){

        $request->validate([
            'name' => 'required',
            'semester'=> 'required',
        ]);

        $course = Course::find($id);

        /*$curso->name = $request->name;
        $curso->profesor = $request->profesor;
        $curso->description = $request->description;
        $curso->semestre = $request->semestre;

        $curso->save(); */

        $course->update($request->all());

        return redirect()->route('course.show', $course);

    }

    public function destroy($id){

        $course = Course::find($id);

        $course->delete();

        return redirect()->route('course.index');
    }

    public function assignment($id, Request $request){
        $course = Course::find($id);

        return view('courses.assignment', compact('course'));
    }

    public function assignmentUp($id, Request $request){

        $request->validate([
            'teacher' => 'required'
        ]);

        $course = Course::find($id);

        $course->update($request->all());

        return redirect()->route('course.show', $course);
    }
}
