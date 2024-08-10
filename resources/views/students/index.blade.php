<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>No. of Assignments</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->mob }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->assignments_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
