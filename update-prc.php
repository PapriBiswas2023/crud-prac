<?php 

include("db.php");

if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    echo "Invalid ID";
    exit;
}

$id = intval($_POST['id']);
$product = $_POST['pro-name'] ?? '';
$quantity = $_POST['quantity'] ?? '';

$target_dir = "product-img/";
$imageName = '';
$uploadOk = 1;

// If a new image is uploaded
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    $allowtype = ['jpg', 'jpeg', 'png'];

    if (!in_array($imageFileType, $allowtype)) {
        $uploadOk = 0;
        echo "Invalid file type.";
        exit;
    }

    $imageName = uniqid("img_") . "." . $imageFileType;
    $target_file = $target_dir . $imageName;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        echo "Error uploading the image.";
        exit;
    }

    $sql = "UPDATE product SET `pro-name`='$product', quantity='$quantity', image='$target_file' WHERE id=$id";
} else {
    // Update without changing image
    $sql = "UPDATE product SET `pro-name`='$product', quantity='$quantity' WHERE id=$id";
}

if (mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
    exit;
} else {
    echo "Update failed: " . mysqli_error($conn);
}






?>