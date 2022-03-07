<?php
$name =isset($_REQUEST['name'])? $_REQUEST['name']:'';
$email =isset($_REQUEST['email'])? $_REQUEST['email']:'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
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