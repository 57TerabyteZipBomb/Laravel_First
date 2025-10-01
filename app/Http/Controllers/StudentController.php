<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = [
            [
                'name' => 'Gerrard',
                'email' => 'Ger.rard@gmail.com',
                'address' => 'kaliwungu'
            ],
            [
                'name' => 'Galih',
                'email' => 'Gal.ih@gmail.com',
                'address' => 'kos mitra'
            ],
            [
                'name' => 'Rakha',
                'email' => 'Rak.ha@gmail.com',
                'address' => 'kos mitra'
            ],
            [
                'name' => 'Enriko',
                'email' => 'En.riko@gmail.com',
                'address' => 'kos mitra'
            ],
            [
                'name' => 'Rafan',
                'email' => 'Raf.an@gmail.com',
                'address' => 'kos permata bunda'
            ]
        ];

        $students_db = Student::all();

        return view("student", [
            'title' => 'Students',
            'students' => $students_db
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
