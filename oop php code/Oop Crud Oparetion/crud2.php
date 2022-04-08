<?php
require_once 'classes/User.php';
$user=new User();
$show=$user->see();
print_r($show);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" value="Save User" name="save_user">
</form>
<hr>
<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th>Action</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($show)){


    ?>
    <tr>
        <td>
            <?= $row['name'] ?>
        </td>
        <td>
            <?= $row['email'] ?>
        </td>
        <td>
            <?= $row['password'] ?>
        </td>
        <td>
<a href="">Edit</a>
            <a href="delete.php?id=<?=$row['id']?>">Delete <a>
        </td>
    </tr>

    <?php
    }
    ?>
</table>
</body>
</html>
