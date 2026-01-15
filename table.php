<?php
include('connection.php');
$select = "SELECT * FROM `tbl_employees`";
$result_select = mysqli_query($conn, $select);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 p4">
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end">
            <a href="formInsert.php">
                <button type="button" class="btn btn-primary mb-2">
                    Add Employees
                </button>
            </a>

        </div>

        <table class="table text-center table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            <tbody>
                <tr>
                    <?php while ($row = mysqli_fetch_assoc($result_select)) {
                        echo '
    <tr>
        <td>' . htmlspecialchars($row['id']) . '</td>
        <td>' . htmlspecialchars($row['ename']) . '</td>
        <td>' . htmlspecialchars($row['gender']) . '</td>
        <td>' . htmlspecialchars($row['email']) . '</td>
        <td>' . htmlspecialchars($row['position']) . '</td>
        <td>$ ' . number_format($row['sal'], 2) . '</td>
        <td>
            <div class="d-flex justify-content-center gap-2">
            <a href="formEdit.php?id='.$row['id'].'">
                <button type="button" name"btnEdit" class="btn btn-warning btn-sm">
                    Edit
                </button>
            </a>
              </form>
                <form action ="delete.php"  method="POST" class = " d-inlnie">
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    <button type="submit" name="btnDelete" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete ?\')">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    ';
                    }
                    ?>
            </tbody>

            </thead>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>