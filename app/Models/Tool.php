<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'instructor'
    ];

    /**
     * Get the courses this tool belongs to
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}