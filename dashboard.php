<?php 
include("db.php");
$sql="SELECT * FROM `product`";
$result=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if($num=mysqli_num_rows($result)>0): ?>
      <?php while($row=mysqli_fetch_assoc($result)):?>
    <tr>
      <th scope="row"></th>
      <td><?=$row['id']?></td>
      <td><?=htmlspecialchars($row['pro-name'])?></td>
      <td><?=$row['quantity']?></td>
      <td>
        <img src="<?=$row['image']?>" width="50" height="50"/>
      </td>
      <td>
        <a href="del-prc.php?id=<?=$row['id']?>" onclick="Are you sure?">
           <img src="action/del.png" width="50" height="50"/>
        </a>
       <a href="form-edit.php?id<?=$row['id']?>">
         <img src="action/edit.png" width="50" height="50"/>
       </a>
       
      </td>
    </tr>
    
    <?php endwhile ?>
    <?php endif ?>
  </tbody>
</table>
</body>
</html>