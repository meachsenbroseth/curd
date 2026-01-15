<?php
include('connection.php');
if(isset($_POST['btnDelete'])){
$id = $_POST['id'];
$delete = mysqli_query($conn,"delete from tbl_employees where id = '$id'");
header('location: table.php');}
 