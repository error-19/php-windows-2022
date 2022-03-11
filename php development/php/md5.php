<?php
$text ="123456";
$x="12345";
//echo md5($text);
echo password_hash($text,PASSWORD_DEFAULT);
echo "<br>";
echo password_hash($x,PASSWORD_DEFAULT);

?>