<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Guardian;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //Student::factory(10)->create();

        Guardian::factory(10)->create();

        $classrooms = ['10 PPLG 1', '10 PPLG 2', '11 PPLG 1', '11 PPLG 2'];

        Classroom::factory()->count(count($classrooms))
            ->sequence(
                fn($sequence) => ['name' => $classrooms[$sequence->index]]
            )
            ->hasStudents(5)
            ->create();

        //ts formatting pmo

        $subjects = [
            [
                'name' => 'Test',
                'description' => 'subject test description test yay'
            ],
            [
                'name' => 'Mobile Dev',
                'description' => 'mobile app development using Flutter'
            ],
            [
                'name' => 'Desktop Dev',
                'description' => 'desktop app development using Visual Studio WinForms'
            ],
            [
                'name' => 'Web Dev',
                'description' => 'website development using Laravel + Tailwind CSS'
            ],
            [
                'name' => 'Game Dev',
                'description' => 'game development using Unity'
            ]
        ];

        Subject::factory()
            ->count(count($subjects))
            ->sequence(
                fn($sequence) => [
                    'name' => $subjects[$sequence->index]['name'],
                    'description' => $subjects[$sequence->index]['description'],
                ]
            )
            ->hasTeacher(1)
            ->create();
    }
}
