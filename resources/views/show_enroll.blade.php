<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-end mb-3">
        <a href="/" class="btn btn-secondary">Back</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h2 class="text-center mb-4">Enrollments</h2>

            <table class="table table-bordered shadow">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Course Name</th>
                        <th>Teacher Name</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($students as $student)
                    @foreach ($student->courses as $course)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>
                                {{ $course->teacher->first_name }}
                                {{ $course->teacher->last_name }}
                            </td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <a href="/edit_student/{{ $student->id }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>

                                <form action="/delete-student/{{ $student->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

</body>
</html>
