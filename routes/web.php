<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::controller(CourseController::class)->group(function() {
    Route::get('course', 'index')->name('course.index');
    Route::get('course/create', 'create')->name('course.create');
    Route::get('course/{id}', 'show')->name('course.show');
    Route::get('course/{id}/edit', 'edit')->name('course.edit');
    Route::get('course/{id}/assignment', 'assignment')->name('course.assignment');

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

    Route::post('group', 'store')->name('group.store');

    Route::put('group/{id}', 'update')->name('group.update');

    Route::delete('group/{id}', 'destroy')->name('group.destroy');
});