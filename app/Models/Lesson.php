<?php
// app/Models/Lesson.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['module_id', 'title', 'content'];

    /**
     * Relasi: Setiap Lesson dimiliki oleh satu Module.
     */
    public function module()
    {
        return $this->belongsTo(Module::class);  // Relasi belongsTo dengan Module
    }
}
