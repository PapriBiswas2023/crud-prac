<?php 

include("db.php");
if(isset($_GET['id']))
 {
     $id = intval($_GET['id']);
    $sql1= "DELETE  FROM `product` WHERE id='$id'";
    if($result = mysqli_query($conn,$sql1)){
        header("Location: dashboard.php");
        exit;
    }else{
        echo "invalid";
    }
    exit;

 }


?>
