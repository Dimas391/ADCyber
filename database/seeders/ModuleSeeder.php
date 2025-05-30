<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;  
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $course = Course::first(); // Ambil kursus pertama (Ethical Hacking)

    // Modul 1: Overview Keamanan Informasi
    Module::create([
        'course_id' => $course->id,
        'title' => 'Overview Keamanan Informasi',
        'description' => 'Modul ini memberikan gambaran tentang keamanan informasi dan elemen-elemen yang terlibat.',
        'content' => 'Keamanan informasi merujuk pada perlindungan data dari ancaman seperti akses yang tidak sah, perubahan, atau penghancuran. Keamanan informasi adalah aset yang sangat penting bagi organisasi. Jika informasi sensitif jatuh ke tangan yang salah, organisasi dapat menderita kerugian besar dalam hal keuangan, reputasi merek, pelanggan, dan sebagainya.',
        'category' => 'Keamanan Informasi',
    ]);

    // Modul 2: Introduction to Ethical Hacking
    $module2 = Module::create([
        'course_id' => $course->id,
        'title' => 'Introduction to Ethical Hacking',
        'description' => 'Modul ini memperkenalkan konsep ethical hacking dan memberi wawasan tentang peran ethical hacker.',
        'content' => 'Ethical hacking melibatkan pengujian sistem untuk kerentanannya dengan menggunakan metode yang sama seperti peretas jahat, namun untuk tujuan meningkatkan keamanan sistem. Pada akhir modul ini, Anda akan dapat memahami tren keamanan saat ini, elemen-elemen yang terlibat dalam keamanan informasi, ancaman dan vektor serangan, konsep hacking, tipe dan fase, dan pengujian penetrasi.',
        'category' => 'Ethical Hacking',
    ]);

    // Modul 3: Ethical Hacking Tools
    $module3 = Module::create([
        'course_id' => $course->id,
        'title' => 'Ethical Hacking Tools',
        'description' => 'Pelajari berbagai alat yang digunakan dalam ethical hacking untuk mengidentifikasi kerentanannya.',
        'content' => 'Alat-alat seperti Nmap, Wireshark, dan Metasploit digunakan oleh ethical hackers untuk mengeksploitasi kerentanannya dan mengamankan sistem. Alat-alat ini membantu ethical hackers dalam menemukan potensi kerentanannya, melakukan pemindaian port, dan mengidentifikasi masalah keamanan lainnya.',
        'category' => 'Tools',
    ]);

    // Modul 4: Hacking Concepts and Terminology
    $module4 = Module::create([
        'course_id' => $course->id,
        'title' => 'Hacking Concepts and Terminology',
        'description' => 'Modul ini mencakup istilah-istilah penting yang sering digunakan dalam dunia hacking dan keamanan.',
        'content' => 'Beberapa istilah penting yang dijelaskan dalam modul ini adalah: \n - Hack Value: nilai sesuatu yang menarik bagi hacker untuk diuji \n - Vulnerability: kelemahan atau kesalahan desain yang memungkinkan akses yang tidak sah ke dalam sistem \n - Exploit: metode yang digunakan untuk mengeksploitasi kerentanannya \n - Payload: bagian dari exploit yang melaksanakan tindakan jahat \n - Zero-Day Attack: serangan yang memanfaatkan kerentanannya sebelum developer merilis patch keamanan.',
        'category' => 'Ethical Hacking',
    ]);
    }
}
