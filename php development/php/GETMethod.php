<?php
$name =isset($_GET['name'])? $_GET['name']:'';
$email =isset($_GET['email'])? $_GET['email']:'';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
     <input type="submit" name="submit" placeholder="submit">
     </form>
<table>
<tr>
    <td> Name </td>
    <td> : <?=  $name; ?> </td>
</tr>
<tr>
    <td> Email</td>
    <td> : <?= $email ?></td>
</tr>
</table>
</body>
</html>