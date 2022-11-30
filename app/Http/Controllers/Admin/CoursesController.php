<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::select('users.name')
                        ->join('model_has_roles', 'users.id', '=', 'model_id')
                        ->where('role_id', '=', 3)
                        ->pluck('users.name', 'users.name');

        return view('admin.courses.create', compact('usuarios'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'semester' => 'required',
            'teacher' => 'required',
        ]);

        $course = Course::create([
            'name' => request('name', null),
            'semester' => request('semester', null),
            'teacher' => request('teacher', null)
        ]);

        return redirect()->route('admin.courses.edit', $course)->with('info', 'The course was successfully created');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $usuarios = DB::table('users')
                        ->select('name', 'id')
                        ->pluck('name', 'name');

        return view('admin.courses.edit', compact('course', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'semester' => 'required',
            'teacher' => 'required'
        ]);

        $course = Course::find($request->course->id);

        $course->update($request->all());


        return redirect()->route('admin.courses.edit', $course)->with('info', 'The course was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Course $course)
    {
        $course = Course::find($request->course->id);

        $course->delete();

        return redirect()->route('admin.courses.index')->with('info', 'The course was successfully deleted');;
    }
}
