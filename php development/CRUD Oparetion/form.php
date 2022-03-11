<?php
require_once 'dcon.php';
 if(isset($_POST['save_info'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $status=$_POST['status'];
   $result= mysqli_query($con,"INSERT INTO `youtube`(`name`,`email`,`password`,`status`) VALUES(
'$name','$email','$password','$status')");
if($result){
    $success="Data Save Successfully";
}
else
{
    $error="Data Not Save";
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
        <td> <input type="text" name="name" placeholder="Name"</td>
    </tr>
</table>
<table>
    <tr>
        <td>Email</td>
        <td> <input type="email" name="email" placeholder="email"</td>
    </tr>
</table>
<table>
    <tr>
        <td>Password</td>
        <td> <input type="password" name="password" placeholder="password"</td>
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
           <option value="1 ">
               Active
           </option>
           <option value=" 0">
               Inactive
           </option>
       </select>
       </td>
    </tr>
</table>
<table>
    <tr>
        <td></td>
        <td> <input type="submit" name="save_info" value="Add user"</td>
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