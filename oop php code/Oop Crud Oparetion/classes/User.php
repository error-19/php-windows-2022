<?php
class User
{
public function __construct()
{
    $host="localhost";
    $user="root";
    $password="";
    $database="oop";
  $this->link=mysqli_connect($host,$user,$password,$database);
}
public function save_user($data){
   $name= $data['name'];
    $email= $data['email'];
    $password= $data['password'];

 mysqli_query( $this->link,$query="INSERT INTO `user`(`name`,`email`,`password`) VALUES ('$name','$email','$password')");
}
}