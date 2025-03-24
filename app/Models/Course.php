<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'instructor',
        'duration_hours'
    ];

    /**
     * Get the tools for this course
     */
    public function tool()
    {
        return $this->belongsToMany(Tool::class);
    }
}
