<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;

class MateriController extends Controller
{
    public function show($courseId, $moduleId = null, $lessonId = null)
    {
        // Get the course with its modules, lessons, and tools
        $course = Course::with(['modules.lessons', 'modules.tools'])->findOrFail($courseId);
        
        // Get all courses for the dashboard section
        $courses = Course::all();
        
        // Determine current module
        if ($moduleId) {
            $currentModule = $course->modules->where('id', $moduleId)->first();
        } else {
            $currentModule = $course->modules->first();
        }
        
        if (!$currentModule) {
            abort(404, 'Module not found');
        }
        
        // Determine current lesson
        $currentLesson = null;
        if ($lessonId) {
            $currentLesson = $currentModule->lessons->where('id', $lessonId)->first();
        }
        
        // Calculate progress
        $totalLessons = $course->modules->sum(function ($module) {
            return $module->lessons->count();
        });
        
        $completedLessons = 0; // You'll need to implement lesson completion tracking
        $progress = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;
        
        // Get navigation lessons
        $allLessons = collect();
        foreach ($course->modules as $module) {
            foreach ($module->lessons as $lesson) {
                $allLessons->push($lesson);
            }
        }
        
        $currentLessonIndex = $currentLesson ? $allLessons->search(function ($lesson) use ($currentLesson) {
            return $lesson->id === $currentLesson->id;
        }) : -1;
        
        $previousLesson = $currentLessonIndex > 0 ? $allLessons[$currentLessonIndex - 1] : null;
        $nextLesson = $currentLessonIndex >= 0 && $currentLessonIndex < $allLessons->count() - 1 
            ? $allLessons[$currentLessonIndex + 1] : null;
        
        // Calculate module completion
        $totalModules = $course->modules->count();
        $completedModules = 0; // You'll need to implement module completion tracking
        
        return view('materi', compact(
            'course',
            'courses', // Add this line to pass courses to the view
            'currentModule',
            'currentLesson',
            'progress',
            'previousLesson',
            'nextLesson',
            'totalModules',
            'completedModules'
        ));
    }
}