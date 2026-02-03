@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h2>Enrollments</h2>
            <a href="{{ route('enrollments.create') }}" class="btn btn-primary mb-2">Add Enrollment</a>
            <a href="/" class="btn btn-secondary mb-2">Back to Home</a>
            <table class="table table-bordered">
                <thead class="table table-secondary">
                    <tr>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Teacher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enrollments as $enroll)
                        <tr>
                            <td>{{ $enroll->student->first_name }} {{ $enroll->student->last_name }}</td>
                            <td>{{ $enroll->course->course_name }}</td>
                            <td>{{ $enroll->course->teacher->first_name }} {{ $enroll->course->teacher->last_name }}</td>
                            <td>
                                <a href="{{ route('enrollments.edit', $enroll->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('enrollments.destroy', $enroll->id) }}" method="POST"
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
