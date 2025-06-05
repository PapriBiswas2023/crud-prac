<?php 
include("db.php");

$product=$_POST['pro-name'];
$quantity=$_POST['quantity'];

$target_dir="product-img/";
$target_file=$target_dir . basename($_FILES["image"]["name"]);
$uploadOk =1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$allowtype =['jpg','jpeg','png'];
if(!in_array($imageFileType, $allowtype)){
    $uploadOk = 0;
}



if($uploadOk){
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
         $imageName = basename($_FILES["image"]["name"]);
         $imagePath = $target_dir . $imageName;
         $sql="INSERT INTO `product`(`pro-name`,quantity,image)VALUES('$product','$quantity','$imagePath')";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            // Redirect on success
            header("Location: product-form.php");
            exit;
        } else {
            echo "Database error: " . mysqli_error($conn);
        }

    } else {
        echo "Error uploading the image file.";
    }

}else{
    echo"eror";
}
 


?>