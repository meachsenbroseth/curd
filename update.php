<?php
include('connection.php');
if(isset($_POST['btnSubmit'])){
    $id = $_POST['id'];
    $ename = $_POST['ename'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $sal = $_POST['sal'];
    $q="UPDATE `tbl_employees` SET `ename`='$ename',`gender`='$gender',`email`='$email',`position`='$position',`sal`='$sal' WHERE `id` ='$id'";
    $updete = mysqli_query($conn,$q);
    if ($updete) {
        header('location: table.php');
    }
}