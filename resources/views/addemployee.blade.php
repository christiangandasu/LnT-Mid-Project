<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Add Employee</h1>
        <form method="POST" action="/store/employee">
            @csrf
            <div class="mb-3">
                <label for="employee-name" class="form-label">Employee Name</label>
                <input type="text" class="form-control" id="employee-name" name="nama">
            </div>
            <div class="mb-3">
                <label for="employee-age" class="form-label">Employee Age</label>
                <input type="number" class="form-control" id="employee-age" name="umur">
            </div>
            <div class="mb-3">
                <label for="employee-address" class="form-label">Employee Address</label>
                <input type="text" class="form-control" id="employee-address" name="alamat">
            </div>
            <div class="mb-3">
                <label for="employee-number" class="form-label">Employee Number</label>
                <input type="text" class="form-control" id="employee-number" name="noHP">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/" class="btn btn-secondary mt-3">Back to Homepage</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
