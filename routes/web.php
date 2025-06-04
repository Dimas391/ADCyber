<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
 });

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');

Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('Login', [LoginController::class, 'showLoginForm'])->name('Login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//  Route::middleware('guest')->group(function () {
//     Route::get('register', [RegisterController::class, 'create'])
//         ->name('register');

//     Route::post('register', [RegisterController::class, 'store']);
// });

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route Modul
Route::get('/modul', [ModulController::class, 'index'])->name('modul');

// Route Tool
Route::get('/tool', [ToolController::class, 'index'])->name('tool.index');

// Route modul
Route::get('/materi', [MateriController::class, 'index'])->name('materi');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/courses/{slug}/tool', [CourseController::class, 'showTools'])->name('courses.tool');

// Material routes
// Material/Course Learning routes
Route::prefix('materi')->name('materi.')->middleware(['auth'])->group(function () {
    // Show course overview (first module, no specific lesson)
    Route::get('/{course}', [MateriController::class, 'show'])->name('show.course');
    
    // Show specific module (without specific lesson - shows module overview)
    Route::get('/{course}/module/{module}', [MateriController::class, 'show'])->name('show.module');
    
    // Show specific lesson within a module
    Route::get('/{course}/module/{module}/lesson/{lesson}', [MateriController::class, 'show'])->name('show');
});

// Completion routes
Route::middleware(['auth'])->group(function () {
    // Mark lesson as completed
    Route::post('/lesson/{lesson}/complete', [MateriController::class, 'markLessonCompleted'])->name('lesson.complete');
    
    // Mark module as completed
    Route::post('/module/{module}/complete', [MateriController::class, 'markModuleCompleted'])->name('module.complete');
});

// Quiz routes
Route::prefix('quiz')->name('quiz.')->middleware(['auth'])->group(function () {
    // Submit quiz answers
    Route::post('/submit', [QuizController::class, 'submit'])->name('submit');
    
    // Get quiz results (optional - for AJAX)
    Route::get('/results/{quiz}', [QuizController::class, 'getResults'])->name('results');
});

// Course routes (if not already defined)
Route::prefix('courses')->name('courses.')->middleware(['auth'])->group(function () {
    // Course index/listing
    Route::get('/', [CourseController::class, 'index'])->name('index');
    
    // Show course details
    Route::get('/{course}', [CourseController::class, 'show'])->name('show');
    
    // Enroll in course
    Route::post('/{course}/enroll', [CourseController::class, 'enroll'])->name('enroll');
});

// Alternative route structure (if you prefer a more nested approach):
/*
Route::prefix('courses')->name('courses.')->middleware(['auth'])->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('/{course}', [CourseController::class, 'show'])->name('show');
    
    // Nested material routes under courses
    Route::prefix('{course}/materi')->name('materi.')->group(function () {
        Route::get('/', [MateriController::class, 'show'])->name('index');
        Route::get('/module/{module}', [MateriController::class, 'show'])->name('module');
        Route::get('/module/{module}/lesson/{lesson}', [MateriController::class, 'show'])->name('lesson');
        
        // Completion routes
        Route::post('/lesson/{lesson}/complete', [MateriController::class, 'markLessonCompleted'])->name('lesson.complete');
        Route::post('/module/{module}/complete', [MateriController::class, 'markModuleCompleted'])->name('module.complete');
    });
});
*/
