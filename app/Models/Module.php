<?php
// app/Models/Module.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'title', 'description', 'content', 'category'];

    /**
     * Relasi: Setiap Module memiliki banyak Lesson.
     */
    public function lessons()
    {
        return $this->hasMany(Lesson::class);  // Relasi hasMany dengan Lesson
    }

      public function tools()
    {
        return $this->hasMany(Tool::class);  // Relasi hasMany dengan Tool
    }

    /**
     * Relasi: Setiap Module dimiliki oleh satu Course.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);  // Relasi belongsTo dengan Course
    }
}
