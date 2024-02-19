<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .employee-card {
            margin-bottom: 20px;
        }
        .action-buttons {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Employee Management System</h1>
        <div class="row">
            @foreach($employee_employee as $employee)
            <div class="col-md-4">
                <div class="card employee-card">
                    <div class="card-body">
                        <h5 class="card-title">{{$employee->employeeName}}</h5>
                        <p class="card-text">Age: {{$employee->employeeAge}}</p>
                        <p class="card-text">Address: {{$employee->employeeAddress}}</p>
                        <p class="card-text">Phone: {{$employee->employeeNumber}}</p>
                        <div class="action-buttons">
                            <a href="/employee/{{ $employee->id }}" class="btn btn-primary">View Details</a>
                            <a href="/update/employee/{{ $employee->id }}" class="btn btn-secondary">Update</a>
                            <form action="/delete/employee/{{ $employee->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="/add/employee" class="btn btn-success mt-4">Add Employee</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
