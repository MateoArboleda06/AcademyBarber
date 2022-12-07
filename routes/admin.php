<?php

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\GroupsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('courses', CoursesController::class)->names('admin.courses');

Route::resource('groups', GroupsController::class)->names('admin.groups');

/* Route::get('groups_asignar', [GroupsController::class, 'asignar_students'])->name('admin.asignar_students'); */

Route::get('student_asigned', [GroupsController::class, 'asignar_students'])->name('form_asigned');

Route::post('student_asigned1', [GroupsController::class, 'asignar'])->name('save_asigned');

Route::get('list_students/{id}/see', [GroupsController::class, 'listStudents'])->name('list_students');
