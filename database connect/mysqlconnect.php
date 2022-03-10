<?php
$con = mysqli_connect('localhost','root','','test');
mysqli_query($con,"INSERT INTO `youtube`(`id`,`name`,`email`,`password`) VALUES(NULL,
'shamim sorkar','mdshamimsorkar19@gmail.com','12345678')");
?>