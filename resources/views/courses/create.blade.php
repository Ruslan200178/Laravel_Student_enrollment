@extends('layouts.app')

@section('content')
    <div class="card shadow  col-md-6 offset-md-3">
        <div class="card-body">
            <h2 class="text-center mb-3">Add Course</h2>
            <form method="POST" action="{{ route('courses.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Course Name</label>
                <input type="text" name="course_name" placeholder="Course Name" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Assign Teacher</label>
                <select name="teacher_id" class="form-control mb-2">

                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success">Save</button>
                <a href="/" class="btn btn-secondary ">Back to Home</a>
            </form>
        </div>
    </div>
@endsection
