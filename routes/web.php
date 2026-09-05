<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes — Student Portal (Week 4: Controllers & Views)
|--------------------------------------------------------------------------
| Zero closures are used; all routes are mapped to dedicated controllers
| using array syntax [Controller::class, 'method'] or invokable controllers.
| All routes are properly named for use with the route() helper.
*/

// Home Dashboard
Route::get('/', [HomeController::class, 'index'])->name('home');

// About & Curriculum Overview
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Single-Action (Invokable) Contact Controller
Route::get('/contact', ContactController::class)->name('contact');

// Course Proposal Form protected by academic session middleware
Route::middleware('enrollment.active')->group(function () {
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
});

// RESTful Resource Controller for Courses (remaining 6 actions)
Route::resource('courses', CourseController::class)->except(['create']);
