<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$employee->employeeName}}</h5>
                <h5 class="card-title">Age: {{$employee->employeeAge}}</h5>
                <h5 class="card-title">Address: {{$employee->employeeAddress}}</h5>
                <h5 class="card-title">Phone: {{$employee->employeeNumber}}</h5>
                <a href="/" class="btn btn-primary">Go To Homepage</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
