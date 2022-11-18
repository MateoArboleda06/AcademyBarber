<?php

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\GroupsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('courses', CoursesController::class)->names('admin.courses');

Route::resource('groups', GroupsController::class)->names('admin.groups');