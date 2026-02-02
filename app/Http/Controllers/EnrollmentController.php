<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class EnrollmentController extends Controller
{
   
    public function index()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('show_enroll', compact('students','courses'));
    }


    public function create()
    {
            $students = Student::all();
           $courses = Course::all();
        return view('enroll', compact('students','courses'));
    }


    public function store(Request $request)
    {
      $student = Student::find($request->student_id);
        $student->courses()->attach($request->course_id);

        return redirect()->back()->with('success','Enrolled Successfully');
    }

    public function show(Enrollment $enrollment)
    {
        //
    }


    public function edit(Enrollment $enrollment)
    {
       $students = Student::all();
        $courses = Course::all();
        return view('edit_enroll', compact('enrollment','students','courses'));
    }


    public function update(Request $request, Enrollment $enrollment)
    {
        $enrollment->update($request->all());
    }


    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->back()->with('success','Enrollment Deleted Successfully');
    }
}
