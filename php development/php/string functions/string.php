<?php
$text ="My name is shamim sorkar";
 echo ucwords($text);
 echo "<br>";
 echo ucfirst($text);echo "<br>";
 echo substr($text,0,6);echo "<br>";
//encryptin:
 echo  md5("123456");echo "<br>";
 $url="https://www.youtube.com/";

 $x=explode('.',$url);
 print_r($x) ;
 ?>