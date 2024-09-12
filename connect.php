<?php
  $name = $_POST['name'];
  $number = $_POST['number'];
  $guests = $_POST['guests'];

if (!empty($name) || !empty($nmber) || !empty(guests) )
{

$host = "localhost";
$username = "root";
$password = "";
$dbname = "coffee2_db";

$conn = new mysqli ($host,$username,$password,$dbname);

  if(mysqli_connect_error()){
  die('connect error('.
mysqli_connect_error().')'.mysqli_connect_error());
}
else{
  $SELECT = "SELECT number FROM coffee_form2 WHERE number = ? Limit 1";

  $INSERT = "INSERT INTO coffee_form2 (name, number, guests) VALUES(?,?,?)"; 

   $stmt = $conn->prepare($SELECT);
   $stmt->bind_param("i", $number);
   $stmt->execute();
   $stmt->bind_result($number);
   $stmt->store_result();
   $rnum = $stmt->num_rows();
     
    if($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $name,$number,$guests);
      $stmt->execute();
      //echo "message sent successfully";
      header('Location:display.php');

    } else {
      echo "message sent already";
    } 
     $stmt->close();
     $conn->close();
  }
   } else {
     echo "All field are required";
      die();
    }

?>