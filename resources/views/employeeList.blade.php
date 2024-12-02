<!DOCTYPE html:5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of Employees</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Job Title Id</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Id</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $worker)
            <tr>
                <td>
                    <a href="{{ route('employees.edit', $worker->id) }}">
                        {{ $worker->name }}
                    </a>
                </td>
                <td>{{ $worker->job_title_id }}</td>
                <td>{{ $worker->gender }}</td>
                <td>{{ $worker->age }}</td>
                <td>{{ $worker->id }}</td>
                <td>
                    <a href="{{ route('employees.edit', $worker->id) }}">Edit</a>
                    <form action="{{ route('employees.destroy', $worker->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
        @endforeach
    </tbody>
</table>

</body>
</html>
</body>
</html>
