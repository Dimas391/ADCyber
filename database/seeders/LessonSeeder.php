<?php
// database/seeders/LessonSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil module berdasarkan judul
        $module = Module::where('title', 'Introduction to Ethical Hacking')->first(); // Ambil modul "Introduction to Ethical Hacking"

        // Lesson 1: Overview of Security Trends
        Lesson::create([
            'module_id' => $module->id,  // Hubungkan dengan module
            'title' => 'Overview of Security Trends',
            'content' => 'Pelajaran ini menjelaskan tren keamanan terbaru dan bagaimana hal ini mempengaruhi sistem keamanan saat ini.',
        ]);

        // Lesson 2: Ethical Hacking Concepts
        Lesson::create([
            'module_id' => $module->id,  // Hubungkan dengan module
            'title' => 'Ethical Hacking Concepts',
            'content' => 'Pelajaran ini menjelaskan apa itu ethical hacking, tujuannya, serta bagaimana ethical hackers mengidentifikasi dan mengatasi masalah keamanan.',
        ]);

        // Lesson 3: Ethical Hacking Tools
        Lesson::create([
            'module_id' => $module->id,  // Hubungkan dengan module
            'title' => 'Ethical Hacking Tools',
            'content' => 'Pelajaran ini memberikan gambaran tentang alat yang digunakan dalam ethical hacking, seperti Nmap, Wireshark, dan Metasploit.',
        ]);
    }
}
