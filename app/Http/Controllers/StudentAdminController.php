<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.student.index", [
            'students' => Student::with('classroom')->paginate(10),
            'classrooms' => Classroom::all()
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'classroom_id' => 'required|exists:classrooms,id',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string',
        ]);

        Student::create($validated);

        return redirect()->back()->with('success', 'Class added successfully!');
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
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'classroom_id' => 'required|exists:classrooms,id',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'address' => 'required|string',
        ]);

        $student->update($validated);

        return redirect()->back()->with('success', 'Student updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Student deleted successfully!');
    }
}
