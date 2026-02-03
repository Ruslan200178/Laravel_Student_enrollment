@extends('layouts.app')

@section('content')
    <div class="card shadow  col-md-6 offset-md-3">
        <div class="card-body">
            <h2 class="text-center mb-3">Edit Teacher</h2>
            <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" value="{{ $teacher->first_name }}" class="form-control mb-2">
                </div>
                <div class="mb-3"></div>
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" value="{{ $teacher->last_name }}" class="form-control mb-2">

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $teacher->email }}" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control mb-2">
                </div>
                <button class="btn btn-success">Update</button>
                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
