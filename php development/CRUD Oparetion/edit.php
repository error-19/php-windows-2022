<?php
require_once 'dbcon.php';
if(isset($_GET['id'])){
    $id=base64_decode($_GET['id']);
    $result= mysqli_query($con,query:"SELECT *  FROM `youtube` WHERE `id`='$id';");
$row=mysqli_fetch_assoc($result);
    print_r($row);
  
}

 if(isset($_POST['save_info'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $status=$_POST['status'];
   $result= mysqli_query($con,"UPDATE `youtube` SET `name`='$name',`email`='$email',`status`='$status' WHERE id='$id' ");
if($result){
    header('Location:index.php');
    $success="Data Update Successfully";
}
else
{
    $error="Data Not update";
}
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action ="<?=  $_SERVER['PHP_SELF'] ?>" method="post">
<table>
    <tr>
        <td>Name</td>
        <td> <input type="text" name="name" placeholder="Name" value="<?=$row['name']; ?>">
        <input type="hidden" name="id" value="<?=$row['id']; ?>">
    </td>
    </tr>
</table>
<table>
    <tr>
        <td>Email</td>
        <td> <input type="email" name="email" placeholder="email" value="<?=$row['email']; ?>"</td>
    </tr>
</table>
<table>
    <tr>
        <td>status</td>
        <td>
       <select name="status" >
           <option value=" ">
               Select
           </option>
           <option value="1 " <?= $row['status'] == 1 ?'selected':'inactive' ?>
               Active
           </option>
           <option value=" 0" <?= $row['status'] == 0 ?'inactive':'selected' ?>
               Inactive
           </option>
       </select>
       </td>
    </tr>
</table>
<table>
    <tr>
        <td></td>
        <td> <input type="submit" name="save_info" value="Update user"</td>
    </tr>
</table>

    </form>
    <a href="view.php">All Users</a>
    <?php 
    if(isset($success)){
        echo '<p>'.$success.'</p>';
    }
     ?>

</body>
</html>