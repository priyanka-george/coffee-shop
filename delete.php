
<?php
include "confied.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM  coffee_form2  WHERE id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        //echo "Delete successfully";
        header("Location:display.php");
    }else{
        die(mysqli_error($conn));

    }
}

?>