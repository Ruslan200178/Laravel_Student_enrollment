@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h2 class="text-center mb-3">Teachers</h2>
            <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-2">Add Teacher</a>
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
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->phone }}</td>
                            {{-- <td>
                                @foreach ($teacher->courses as $course)
                                    {{ $course->course_name }}<br>
                                @endforeach
                            </td> --}}
                            <td>
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST"
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
        @endsection
