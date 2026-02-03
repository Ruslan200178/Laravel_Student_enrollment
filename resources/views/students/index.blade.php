@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h2 class="text-center">Students</h2>
            <a href="{{ route('students.create') }}" class="btn btn-primary mb-2">Add Student</a>
            <a href="/" class="btn btn-secondary mb-2">Back to Home</a>
            <table class="table table-bordered">
                <thead class="table table-secondary">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        {{-- <th>Courses</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            {{-- <td>
                                @foreach ($student->courses as $course)
                                    {{ $course->course_name }} ({{ $course->teacher->first_name }})<br>
                                @endforeach
                            </td> --}}
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
