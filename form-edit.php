<?php
include("db.php");


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <form action="form-prc.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="productname" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="pro-name" name="pro-name" aria-describedby="Enter product name">
    
  </div>
  <div class="mb-3">
    <label for="Quantity" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Product Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>