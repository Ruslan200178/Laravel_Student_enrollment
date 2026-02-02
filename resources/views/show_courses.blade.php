<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">All Courses</h2>
        <div class="d-flex justify-content-end mb-3">
            <a href="/" class="btn btn-secondary">Back</a>
            <a href="/add-course" class="btn btn-primary ms-2">+New</a>
            </div>
            <div class="card shadow">
                <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
                        <th>Teacher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->teacher->first_name }} {{ $course->teacher->last_name }}</td>
                            <td>
                                <a href="/edit-course/{{ $course->id }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/delete-course/{{ $course->id }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>

</html>
