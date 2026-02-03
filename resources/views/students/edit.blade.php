@extends('layouts.app')

@section('content')
    <div class="card shadow  col-md-6 offset-md-3">
        <div class="card-body">
            <h2 class="text-center mb-3 ">Edit Student</h2>
            <form method="POST" action="{{ route('students.update', $student->id) }}">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" value="{{ $student->first_name }}" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" value="{{ $student->last_name }}" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $student->email }}" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ $student->phone }}" class="form-control mb-2">
                </div>
                <button class="btn btn-success">Update</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
