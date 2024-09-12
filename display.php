<?php
include "confied.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GM Coffee Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

</head>
<body>

<div class="container ">
<button class="btn btn-primary my-5"><a href="coffee.php#contact" class="text-light"> Book a Table</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Guests</th>
    </tr>
  </thead>

  <tbody>
<?php
$sql="SELECT *FROM coffee_form2";
$result=mysqli_query($conn,$sql);
if($result){
  while ($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $number=$row['number'];
    $guests=$row['guests'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$number.'</td>
    <td>'.$guests.'</td>
    <td>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light"> Delete</a></button>
    </td>

   </tr>';
  }
}

?>


  </tbody>
</table>


    
</body>
</html>