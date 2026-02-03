@extends('layouts.app')

@section('content')
    <div class="card shadow  col-md-6 offset-md-3">
        <div class="card-body">
            <h2 class="text-center mb-3">Add Enrollment</h2>
            <form method="POST" action="{{ route('enrollments.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Select Student</label>
                    <select name="student_id" class="form-control mb-2">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <label class="form-label">Select Course</label>
                    <select name="course_id" class="form-control mb-2">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}
                                ({{ $course->teacher->first_name }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success">Enroll</button>
                <a href="/" class="btn btn-secondary ">Back to Home</a>
            </form>
        </div>
    </div>
@endsection
