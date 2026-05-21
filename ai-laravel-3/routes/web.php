<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\DepartmentController;

Route::view('/', 'home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('courses/showcase',
    [CourseController::class, 'showCase'])->name('courses.showcase');

Route::get('courses/{course}/curriculum',
    [CourseController::class, 'showCurriculum'])->name('courses.curriculum');

Route::resource('courses', CourseController::class);

Route::resource('disciplines', DisciplineController::class);

Route::resource('departments', DepartmentController::class);

require __DIR__.'/settings.php';
