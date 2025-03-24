<?php
namespace App\Http\Controllers;
use App\Models\Tool;
use App\Models\Course;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display the tool listing
     */
    public function index()
    {
        $tools = Tool::all();
        
        // Since your view uses $course->name, we need to pass a course too
        // Option 1: Get a specific course by ID
        $course = Course::find(1); // Replace 1 with the appropriate course ID
        
        // Option 2: Or get the first course
        // $course = Course::first();
        
        return view('tools', compact('tools', 'course'));
    }
    
    /**
     * Show details for a specific tool
     */
    public function show($slug)
    {
        $tool = Tool::where('slug', $slug)
            ->firstOrFail();
        
        return view('tool.show', compact('tool'));
    }
}