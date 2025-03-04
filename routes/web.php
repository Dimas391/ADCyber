<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\MateriController;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
 });

 Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
 Route::post('/login', [LoginController::class, 'login']);

 Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisterController::class, 'store']);
});

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route Modul
Route::get('/modul', [ModulController::class, 'index'])->name('modul');

// Route Tool
Route::get('/tool', [ToolController::class, 'index'])->name('tool');

// Route modul
Route::get('/materi', [MateriController::class, 'index'])->name('materi');
