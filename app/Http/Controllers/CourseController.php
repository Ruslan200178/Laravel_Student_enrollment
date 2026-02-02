<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Teacher;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('teacher')->get();
        return view('show_courses', compact('courses'));
    }
    public function create()
    {
        $teachers = Teacher::all(); // teacher list fetch
        return view('add_course', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        Course::create([
            'course_name' => $request->course_name,
            'teacher_id'  => $request->teacher_id,
        ]);

        return redirect()->back()->with('success', 'Course added successfully');
    }
}