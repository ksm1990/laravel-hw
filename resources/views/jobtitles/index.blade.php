<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Job Titles</h1>
    <a href="{{ route('jobtitles.create') }}" class="btn btn-primary mb-3">Add Job Title</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobtitles as $jobtitle)
            <tr>
                <td>{{ $jobtitle->title }}</td>
                <td>
                    <a href="{{ route('jobtitles.show', $jobtitle->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('jobtitles.edit', $jobtitle->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('jobtitles.destroy', $jobtitle->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
