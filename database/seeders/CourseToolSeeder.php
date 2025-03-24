<?php
namespace Database\Seeders;

use App\Models\Course;
use App\Models\Tool;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define courses with their associated tools
        $coursesWithTools = [
            [
                'name' => 'Footprinting and Reconnaissance',
                'description' => 'Belajar bagaimana mengumpulkan data target untuk merancang serangan yang terarah',
                'instructor' => 'Dimas Kurniawan',
                'duration_hours' => 8,
                'tools' => ['Maltego', 'Shodan', 'TheHarvester', 'Recon-ng', 'OSINT Framework']
            ],
            [
                'name' => 'Social Engineering',
                'description' => 'Memahami teknik manipulasi psikologis dalam keamanan informasi',
                'instructor' => 'Dimas Kurniawan',
                'duration_hours' => 10,
                'tools' => ['SET (Social Engineering Toolkit)', 'Gophish', 'BeEF', 'Wifiphisher', 'SpeedPhish Framework']
            ],
            [
                'name' => 'Cloud Computing',
                'description' => 'Pengenalan teknologi cloud dan implementasinya dalam bisnis',
                'instructor' => 'Dimas Kurniawan',
                'duration_hours' => 12,
                'tools' => ['AWS CLI', 'Azure PowerShell', 'Google Cloud SDK', 'Terraform', 'CloudSploit']
            ],
            [
                'name' => 'Hacking Web Application',
                'description' => 'Mempelajari kerentanan dan teknik pengujian aplikasi web',
                'instructor' => 'Dimas Kurniawan',
                'duration_hours' => 15,
                'tools' => ['Burp Suite', 'OWASP ZAP', 'Sqlmap', 'Nikto', 'Dirb']
            ],
            [
                'name' => 'Scanning Networks',
                'description' => 'Teknik dan metode untuk scanning jaringan dan deteksi sistem',
                'instructor' => 'Dimas Kurniawan',
                'duration_hours' => 8,
                'tools' => ['Nmap', 'Wireshark', 'Metasploit', 'Nessus', 'OpenVAS']
            ],
        ];

        // Create all tool records first
        $allTools = [];
        foreach ($coursesWithTools as $courseData) {
            foreach ($courseData['tools'] as $toolName) {
                if (!isset($allTools[$toolName])) {
                    $allTools[$toolName] = Tool::create([
                        'name' => $toolName,
                        'slug' => Str::slug($toolName),
                        'instructor' => 'Dimas Kurniawan',
                    ]);
                }
            }
        }

        // Create courses and attach tools
        foreach ($coursesWithTools as $courseData) {
            $course = Course::create([
                'name' => $courseData['name'],
                'slug' => Str::slug($courseData['name']),
                'description' => $courseData['description'],
                'instructor' => $courseData['instructor'],
                'duration_hours' => $courseData['duration_hours'],
            ]);

            // Attach tools to this course
            foreach ($courseData['tools'] as $toolName) {
                $course->tools()->attach($allTools[$toolName]->id);
            }
        }
    }
}
