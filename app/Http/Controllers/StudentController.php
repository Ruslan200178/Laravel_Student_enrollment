<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Add a new student
    public function addStudent(Request $request)
    {
            $request->validate([
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'required|email',
        'phone'      => 'required',
    ]);
        Student::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

        return redirect('show-student')
               ->with('success', 'Student added successfully');
    }

    // View all students
    public function index()
    {
        $students = Student::all();
        return view('show_student', compact('students'));
    }

    // Show edit form
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit_student', compact('student'));
    }

    // Update student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

        return redirect()->route('show_student')
                         ->with('success', 'Student updated successfully');
    }

    // Delete student
    public function destroy($id)
    {
        Student::destroy($id);

        return redirect()->route('show_student')
                         ->with('success', 'Student deleted successfully');
    }
}
