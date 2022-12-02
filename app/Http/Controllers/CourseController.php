<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() { 

        $courses1 = Course::where('name', 'Diagnosis and Hair Techniques')->first();
        $courses2 = Course::where('name', 'Biosafety')->first();
        $courses3 = Course::where('name', 'Entrepreneurship')->first();

        $array_courses = [$courses1, $courses2, $courses3];
        //dd($array_courses);

        return view('courses.index', compact('array_courses'));
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

    public function assignment($id){
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

    public function schedule(){

        $courses1 = Course::where('name', 'Diagnosis and Hair Techniques')->first();
        $courses2 = Course::where('name', 'Biosafety')->first();
        $courses3 = Course::where('name', 'Entrepreneurship')->first();

        $array_courses = [$courses1->groups, $courses2->groups, $courses3->groups];

        $user = auth()->user()->name;

        $course1 = $courses1->groups;
        $course2 = $courses2->groups;
        $course3 = $courses3->groups;

        //$courses1->groups;

        //dd($course1);

        //dd($array_courses);

        return view('courses.schedule', compact('course1', 'course2', 'course3', 'courses1', 'courses2', 'courses3', 'user'));
    }

    public function informationCourse(){

        $cant_courses = Course::count();
        $cant_vistas = 2;
        $cant_faltantes = Course::where([['name', '!=', 'Sale and Consulting'], ['name', '!=', 'Hair Color Change Techniques']])->count();
        $name_viwed1 = Course::where('name', 'Sale and Consulting')->get();
        $name_viwed2 = Course::where('name', 'Hair Color Change Techniques')->get();
        $names_missed = Course::where([['name', '!=', 'Sale and Consulting'], ['name', '!=', 'Hair Color Change Techniques']])->get();

        return view('courses.information', compact('cant_courses', 'cant_vistas', 'cant_faltantes', 'name_viwed1', 'name_viwed2', 'names_missed'));
    }
}
