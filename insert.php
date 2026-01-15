<?php
include('connection.php');
if(isset($_POST['btnSubmit'])){
    $ename = $_POST['ename'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $sal = $_POST['sal'];
    $insert = mysqli_query($conn, "INSERT INTO `tbl_employees`(`ename`, `gender`, `email`, `position`, `sal`) VALUES ('$ename','$gender','$email','$position','$sal')");
    if ($insert) {
        header('location: table.php');
    }
}