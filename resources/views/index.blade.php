@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="mb-3">Student Enrollment System</h1>
        <p class="lead">Welcome</p>
    </div>

    <div class="row justify-content-center">
        <!-- Students -->
        <div class="col-md-3 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h4>Students</h4>
                    <a href="{{ route('students.index') }}" class="btn btn-primary mt-2">View Students</a>
                    <a href="{{ route('students.create') }}" class="btn btn-success mt-2">Add Student</a>
                </div>
            </div>
        </div>

        <!-- Teachers -->
        <div class="col-md-3 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h4>Teachers</h4>
                    <a href="{{ route('teachers.index') }}" class="btn btn-primary mt-2">View Teachers</a>
                    <a href="{{ route('teachers.create') }}" class="btn btn-success mt-2">Add Teacher</a>
                </div>
            </div>
        </div>

        <!-- Courses -->
        <div class="col-md-3 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h4>Courses</h4>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary mt-2">View Courses</a>
                    <a href="{{ route('courses.create') }}" class="btn btn-success mt-2">Add Course</a>
                </div>
            </div>
        </div>

        <!-- Enrollments -->
        <div class="col-md-3 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h4>Enrollments</h4>
                    <a href="{{ route('enrollments.index') }}" class="btn btn-primary mt-2">View Enrollments</a>
                    <a href="{{ route('enrollments.create') }}" class="btn btn-success mt-2">Add Enrollment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
