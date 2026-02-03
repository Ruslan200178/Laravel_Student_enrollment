@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h2 class="text-center mb-3">Courses</h2>
            <a href="{{ route('courses.create') }}" class="btn btn-primary mb-2">Add Course</a>
            <a href="/" class="btn btn-secondary mb-2">Back to Home</a>

            <table class="table table-bordered">
                <thead class="table table-secondary">
                    <tr>
                        <th>Course Name</th>
                        <th>Teacher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->teacher->first_name }} {{ $course->teacher->last_name }}</td>
                            <td>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
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
    </div>
@endsection
