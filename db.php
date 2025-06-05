<?php 
$servername="localhost";
$username="root";
$password="";
$database="ecom";
$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("connection error". $conn->connect_error);
}
else{
    //echo"success";
}
?>