<?php
include('connection.php');
$id = $_GET['id'];
$select = "SELECT * FROM `tbl_employees` WHERE id = '$id';";
$result_select = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result_select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <label for="ename" class=" form-label">Employees name</label>
                <input type="text" class=" form-control" id="ename" name="ename" value="<?= $row['ename'] ?>">
                <label for="gender" class=" form-label">Gender</label>
                <select class="form-select" name="gender" id="gender">
                    <option disabled hidden>other</option>
                    <option value="male" <?= $row['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
                    <option value="female" <?= $row['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
                </select>
                <label for="email" class=" form-label">Email</label>
                <input type="email" class=" form-control" id="email" name="email" value="<?= $row['email'] ?>">
                <label for="sal" class=" form-label">Salary</label>
                <input type="number" class=" form-control" id="sal" name="sal" value="<?= $row['sal'] ?>">
                <label for="position">Position</label>
                <select class="form-select" name="position" id="position" va>
                    <option disabled selected hidden>Select Position</option>
                    <option value="ceo" <?= $row['position'] == '' ? 'selected' : 'ceo' ?>>CEO</option>
                    <option value="project_manager" <?= $row['position'] == 'project_manager' ? 'selected' : '' ?>>Manager</option>
                    <option value="frontend_dev" <?= $row['position'] == 'frontend_dev' ? 'selected' : '' ?>>Frontend Developer</option>
                    <option value="backend_dev" <?= $row['position'] == 'backend_dev' ? 'selected' : '' ?>>Backend Developer</option>
                    <option value="it_support" <?= $row['position'] == 'it_support' ? 'selected' : '' ?>>IT Support Specialist</option>
                    <option value="database_admin" <?= $row['position'] == 'database_admin' ? 'selected' : '' ?>>>Database Administrator</option>
                </select>
                <button name="btnSubmit" type="submit" class="btn btn-primary mt-4 mb-4" onclick="return confirm('Are you sure to edit ?')">Seve</button>
        </div>
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>

    </html>
</body>

</html>