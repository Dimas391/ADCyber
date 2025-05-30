<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CourseToolSeeder::class,
            ModuleSeeder::class,
            LessonSeeder::class,
            ToolSeeder::class,
            ModuleToolSeeder::class,
        ]);
    }
}