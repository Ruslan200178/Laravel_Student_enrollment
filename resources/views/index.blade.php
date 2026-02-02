<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body text-center">

            <h1 class="mb-3">Welcome to Student Enrollment System</h1>
            {{-- <p class="text-muted">Select an option to manage the system</p> --}}

           
            <h5 class="mt-4">Student Management</h5>
            <a href="/add-student" class="btn btn-primary mt-2">Add Student</a>
            <a href="{{ route('show_student') }}" class="btn btn-secondary mt-2">
                View All Students
            </a>

            <hr>

         
            <h5>Teacher Management</h5>
            <a href="/add-teacher" class="btn btn-success mt-2">Add Teacher</a>
            <a href="{{ route('show_teacher') }}" class="btn btn-success mt-2">
                View All Teachers
            </a>

            <hr>

            
            <h5>Course Management</h5>
            <a href="/add-course" class="btn btn-warning mt-2">Add Course</a>
            <a href="{{ route('show_courses') }}" class="btn btn-warning mt-2">
                View All Courses
            </a>

            <hr>

           
            <h5>Enrollment</h5>
            <a href="/enroll" class="btn btn-danger mt-2">
                Enroll Student to Course
            </a>
            <a href="{{ route('show_enroll') }}" class="btn btn-danger mt-2">
                View Enrollments
            </a>

        </div>
    </div>
</div>
</body>
</html>
