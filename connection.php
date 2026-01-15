<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'db_php_leaning';
$conn = mysqli_connect($host,$username,$pass,$db);


if(!$conn){
    echo 'connect fail';
}