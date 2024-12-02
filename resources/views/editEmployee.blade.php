<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Edit Employee: {{ $employee->name }}</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $employee->name }}" required>
        </div>

        <div>
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" value="{{ $employee->job_title }}" required>
        </div>

        <div>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male" {{ $employee->gender === 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $employee->gender === 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ $employee->age }}" required>
        </div>

        <button type="submit">Save Changes</button>
    </form>

</body>
</html>
