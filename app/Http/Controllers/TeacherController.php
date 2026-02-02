<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('show_teacher', compact('teachers'));
    }

    public function addTeacher(Request $request)
    {
            $request->validate([
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'required|email',
        'phone'      => 'required',
    ]);
        Teacher::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

        return redirect('show_teacher')
               ->with('success', 'Teacher added successfully');
    }

     // Show edit form
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('edit_teacher', compact('teacher'));
    }

    // Update teacher
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->update([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

        return redirect()->route('show_teacher')
                         ->with('success', 'Teacher updated successfully');
    }

    // Delete teacher
    public function destroy($id)
    {
        Teacher::destroy($id);

        return redirect()->route('show_teacher')
                         ->with('success', 'Teacher deleted successfully');
    }
}

