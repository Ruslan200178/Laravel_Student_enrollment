<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h2 class="text-center mb-4">Add New Course</h2>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Add Course Form -->
            <form action="/add-course" method="POST">
                @csrf

                <!-- Course Name -->
                <div class="mb-3">
                    <label for="course" class="form-label">Course Name</label>
                    <input type="text" name="course_name" class="form-control" id="course" placeholder="Enter Course Name" required>
                </div>

                <!-- Teacher Select -->
                <div class="mb-3">
                    <label for="teacher_id" class="form-label">Assign Teacher</label>
                    <select name="teacher_id" id="teacher_id" class="form-select" required>
                        <option value="">-- Select Teacher --</option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">
                                {{ $teacher->first_name }} {{ $teacher->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-warning">Add Course</button>
                    <a href="/" class="btn btn-secondary">Back to Home</a>
                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>
