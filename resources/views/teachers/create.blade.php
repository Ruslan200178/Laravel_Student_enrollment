@extends('layouts.app')

@section('content')
    <div class="card shadow  col-md-6 offset-md-3">
        <div class="card-body">
            <h2 class="text-center mb-3">Add Teacher</h2>
            <form method="POST" action="{{ route('teachers.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                <input type="text" name="first_name" placeholder="First Name" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control mb-2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                <input type="text" name="phone" placeholder="Phone" class="form-control mb-2">
                </div>
                <button class="btn btn-success">Save</button>
                <a href="/" class="btn btn-secondary ">Back to Home</a>
            </form>
        </div>
    </div>
@endsection
