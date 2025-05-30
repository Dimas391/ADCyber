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
Route::prefix('materi')->name('materi.')->group(function () {
    // Show course overview (first module, no specific lesson)
    Route::get('/{course}', [MateriController::class, 'show'])->name('show.course');
    
    // Show specific module (first lesson of the module)
    Route::get('/{course}/module/{module}', [MateriController::class, 'show'])->name('show.module');
    
    // Show specific lesson
    Route::get('/{course}/module/{module}/lesson/{lesson}', [MateriController::class, 'show'])->name('show');
    
    // Mark lesson as completed
    Route::post('/{course}/module/{module}/lesson/{lesson}/complete', [MateriController::class, 'markLessonCompleted'])->name('complete');
});

