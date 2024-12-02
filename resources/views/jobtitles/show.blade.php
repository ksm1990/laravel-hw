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
        <h1>Job Title: {{ $jobtitle->title }}</h1>
        <a href="{{ route('jobtitles.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>

</body>
</html>
