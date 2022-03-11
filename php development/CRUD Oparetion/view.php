<?php
require_once 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="form.php">Add Users</a>
<table class="data">
    <tr>
       <th>SI No</th>
       <th>Name</th>
       <th>Email</th>
       <th>password</th>
       <th>Status</th>
       <th>Datetime</th>
       <th>Action</th>
    </tr>
    <?php
     $result=mysqli_query($con,query:"SELECT * FROM `youtube`");
     while($row = mysqli_fetch_assoc($result)){
      ?>
<tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['status']==1?'Active':'Inactive'; ?></td>
        <td><?php echo $row['datetime']; ?></td>
        <td><a href="delete.php?id=<?= base64_encode($row['id']) ?>" >Delete</a></td>
    </tr>
      <?php
    }
    ?>
    </table>
</body>
</html>