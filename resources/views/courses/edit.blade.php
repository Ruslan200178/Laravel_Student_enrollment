@extends('layouts.app')

@section('content')
    <div class="card shadow  col-md-6 offset-md-3">
        <div class="card-body">
            <h2 class="text-center">Edit Course</h2>
            <form method="POST" action="{{ route('courses.update', $course->id) }}">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Course Name</label>
                    <input type="text" name="course_name" value="{{ $course->course_name }}" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Assign Teacher</label>
                    <select name="teacher_id" class="form-control mb-2">
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ $course->teacher_id == $teacher->id ? 'selected' : '' }}>
                                {{ $teacher->first_name }} {{ $teacher->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success">Update</button>
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
