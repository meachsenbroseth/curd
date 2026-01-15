<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 p4 w-75 shadow-lg">
        <div class=" d-flex justify-content-end">
            <a href="table.php">
                <button type="button" class="btn btn-warning mb-2 mt-3">
                    back
                </button>
            </a>
        </div>
        <form action="insert.php" method="post">
            <label for="ename" class=" form-label">Employees name</label>
            <input type="text" class=" form-control" id="ename" name="ename" placeholder="Enter Employees Name">
            <label for="gender" class=" form-label">Gender</label>
            <select class="form-select" name="gender" id="gender">
                <option disabled selected hidden>other</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="email" class=" form-label">Email</label>
            <input type="email" class=" form-control" id="email" name="email" placeholder="Enter Email">
            <label for="sal" class=" form-label">Salary</label>
            <input type="number" class=" form-control" id="sal" name="sal" placeholder="Enter Salary">
            <label for="position">Position</label>
            <select class="form-select" name="position" id="position">
                <option disabled selected hidden>Select Position</option>
                <option value="ceo">CEO</option>
                <option value="project_manager">Manager</option>
                <option value="frontend_dev">Frontend Developer</option>
                <option value="backend_dev">Backend Developer</option>
                <option value="it_support">IT Support Specialist</option>
                <option value="database_admin">Database Administrator</option>
            </select>
            <button name="btnSubmit" type="submit" class="btn btn-primary mt-4 mb-4">Add Employees</button>
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>