<?php
// app/Http/Controllers/CourseController.php
namespace App\Http\Controllers;
use App\Models\Tool;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**x
     * Display the course listing
     */
    public function index()
    {
        $courses = Course::with('tool')->get();
        return view('courses.index', compact('courses'));
    }
    
    /**
     * Show tools for a specific course
     */
    public function showTools($slug)
    {
        $course = Course::where('slug', $slug)
            ->with('tool')
            ->firstOrFail();
        
        $tools = Tool::where('id', $course->id)->get();
        
        // Change the view path to match your existing file
        return view('tools', compact('course', 'tools'));
        
        // If you want the tools data to be accessible in the view as $tools
        // $tools = $course->tool;
        // return view('tools', compact('course', 'tools'));
    }
}