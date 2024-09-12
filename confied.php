<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "coffee2_db";

$conn = new mysqli ($host,$username,$password,$dbname);

if(mysqli_connect_error()){
    die('connect error('.
  mysqli_connect_error().')'.mysqli_connect_error());
  }
  

?>