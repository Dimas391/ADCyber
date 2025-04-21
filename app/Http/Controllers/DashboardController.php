<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller

{  
    public function index()
    {
        $courses = Course::with('tool')->get();
        return view('dashboard', compact('courses'));
    }
 }
