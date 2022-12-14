<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\Course;
use App\Models\Ratings;
use App\Models\User;
use Illuminate\Http\Request;
use JeroenNoten\LaravelAdminLte\View\Components\Widget\Progress;

class CourseController extends Controller
{
    public function index() { 

        $usuarios = User::where('id', auth()->user()->id)->first();
        $courses = $usuarios->groups;

        $array_courses = [];
        $i = 0;
        // dd($courses[$i]['course']);

        foreach($courses as $course){

            $course_student = Course::where('name', $course['course'])->first();

            $array_courses[] = $course_student;
            $i++;
        }
        // dd($array_courses);

        return view('courses.index', compact('array_courses'));
    }

    public function create() {
        return view('courses.create');
    }

    public function show($id) {

        // dd($id);

        $course = Course::find($id);
        $ratings = Ratings::where('id_user', auth()->user()->id)
                            ->where('id_group', $course->group)->first();
        
        // dd($ratings);

        $course1 = $course->groups;


        return view('courses.show', compact('course','course1','ratings'));
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

        $usuarios = User::where('id', auth()->user()->id)->first();
        $courses = $usuarios->groups;

        // dd($courses);

        /* $courses1 = Course::where('name', 'Diagnosis and Hair Techniques')->first();
        $courses2 = Course::where('name', 'Biosafety')->first();
        $courses3 = Course::where('name', 'Entrepreneurship')->first(); */

        /* dd($courses1); */
        // $array_courses = [$courses1->groups, $courses2->groups, $courses3->groups];

        $user = auth()->user()->name;

        /* $course1 = $courses1->groups;
        $course2 = $courses2->groups;
        $course3 = $courses3->groups; */

        //$courses1->groups;

        //dd($course1);

        //dd($array_courses);

        return view('courses.schedule', compact('courses', 'user'));
    }

    public function informationCourse(){

        $cant_vistas = Backup::where('id_user', auth()->user()->id)
                                ->where('status', 'Aprobado')->count();
        
        $courses = Course::all()->count();

        $cant_faltantes = $courses-$cant_vistas;

        $user_groups = Backup::where('id_user', auth()->user()->id)
                            ->where('status', 'Aprobado')->get();

        // dd($user_group);
        $array_names_viewds = [];
        foreach($user_groups as $user_group){

            $course_name = Course::where('id', $user_group->id_course)->first();
            $array_names_viewds[] = $course_name;
        };

        
        // dd($cant_faltantes);
        // dd($courses);
        // dd($cant_vistas);
        
        /* $cant_courses = Course::count();
        $cant_vistas = 2;
        $cant_faltantes = Course::where([['name', '!=', 'Sale and Consulting'], ['name', '!=', 'Hair Color Change Techniques']])->count();
        $name_viwed1 = Course::where('name', 'Sale and Consulting')->get();
        $name_viwed2 = Course::where('name', 'Hair Color Change Techniques')->get();
        $names_missed = Course::where([['name', '!=', 'Sale and Consulting'], ['name', '!=', 'Hair Color Change Techniques']])->get(); */

        $progress = (($cant_faltantes*10)-(($cant_faltantes+$cant_vistas)*10))*-1;

        return view('courses.information', compact('cant_vistas', 'cant_faltantes', 'progress', 'array_names_viewds'));
    }
}
