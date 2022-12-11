<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
use Illuminate\Support\Facades\Route;

// Ruta Principal

Route::get('/', HomeController::class)->name('home');

// Rutas Estudiante

Route::controller(CourseController::class)->group(function() {
    Route::get('course', 'index')->name('course.index');
    Route::get('course/create', 'create')->name('course.create');
    Route::get('course/{id}', 'show')->name('course.show');
    Route::get('course/{id}/edit', 'edit')->name('course.edit');
    Route::get('course/{id}/assignment', 'assignment')->name('course.assignment');
    Route::get('student/schedule', 'schedule')->name('student.schedule');
    Route::get('information/courses', 'informationCourse')->name('student.informationCourse');

    Route::post('course', 'store')->name('course.store');

    Route::put('course/{id}/update', 'update')->name('course.update');
    Route::put('course/{id}', 'assignmentUp')->name('course.assignmentUp');

    Route::delete('course/{id}', 'destroy')->name('course.destroy');
});

Route::controller(GroupController::class)->group(function() {
    Route::get('group', 'index')->name('group.index');
    Route::get('group/create', 'create')->name('group.create');
    Route::get('group/{id}', 'show')->name('group.show');
    Route::get('group/{id}/edit', 'edit')->name('group.edit');
    Route::get('group/{id}/assignmentTeacher', 'assignmentTeacher')->name('group.assignmentTeacher');

    Route::post('group', 'store')->name('group.store');

    Route::put('group/{id}/update', 'update')->name('group.update');
    Route::put('group/{id}', 'assignmentUpTeacher')->name('group.assignmentUpTeacher');

    Route::delete('group/{id}', 'destroy')->name('group.destroy');
});

Route::get('student', [StudentController::class, 'index'])->name('student.index');

// Rutas Email

Route::get('contactus', [ContactUsController::class, 'index'])->name('contactUs.index');
Route::post('contactus', [ContactUsController::class, 'store'])->name('contactUs.store');


// Rutas Profesor

Route::resource('teacher', TeacherController::class)->middleware('can:teacher')->names('teacher');
Route::get('tracing/{id}/student/{id_g}', [TeacherController::class, 'tracing'])->middleware('can:tracing')->name('tracing');
Route::post('tracing/edit', [TeacherController::class, 'tracingEdit'])->middleware('can:tracing')->name('tracingEdit');
Route::post('tracing/final', [TeacherController::class, 'final'])->middleware('can:tracing')->name('final');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
