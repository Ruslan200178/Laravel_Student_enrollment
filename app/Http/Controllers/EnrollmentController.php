<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with('student','course.teacher')->get();
        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::with('teacher')->get();
        return view('enrollments.create', compact('students','courses'));
    }

    public function store(Request $request)
    {
        Enrollment::create($request->all());
        return redirect()->route('enrollments.index');
    }

    public function edit(Enrollment $enrollment)
    {
        $students = Student::all();
        $courses = Course::all();
        return view('enrollments.edit', compact('enrollment','students','courses'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $enrollment->update($request->all());
        return redirect()->route('enrollments.index');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('enrollments.index');
    }
}
