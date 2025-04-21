<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class ModulController extends Controller

{  
    public function index()
    {
        $courses = Course::with('tool')->get();
        return view('Modul', compact('courses'));
    }
 }
