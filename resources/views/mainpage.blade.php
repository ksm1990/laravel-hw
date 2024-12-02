<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Entrance Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .main-container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <header class="text-center mb-4">
            <h1>Employee Entrance Management System</h1>
            <p class="lead">Efficiently manage employees, job titles, and room access.</p>
        </header>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Employee List</h2>
                        <p class="card-text">View the list of employees in the organization, their details, and actions.</p>
                        <a href="{{ route('employees.index') }}" class="btn btn-primary">View Employees</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Add Employee</h2>
                        <p class="card-text">Add a new employee to the database with relevant details.</p>
                        <a href="{{ route('employees.create') }}" class="btn btn-success">Add Employee</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Jobtitle list</h2>
                        <p class="card-text">Add a new jobtitle to the system.</p>
                        <a href="{{ route('jobtitles.index') }}" class="btn btn-success">View Jobtitles</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Room Management</h2>
                        <p class="card-text">View and manage room details, access logs, and assignments.</p>
                        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Manage Rooms</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center mt-5">
            <p>&copy; {{ date('Y') }} Employee Management System. All Rights Reserved.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
