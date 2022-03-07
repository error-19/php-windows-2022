<?php
session_start();
if(isset($_SESSION['email'])){
    header('Location:admin.php');
}

if(isset($_POST['login'])){
    define('EMAIL','admin@gmail.com');
    define('PASSWORD','12345678');
    $email = $_POST['email'];
    $password =$_POST['password'];
    $keep =$_POST['keep'];
     print_r($_POST);
    if($email== EMAIL){
        if($password==PASSWORD){
            $_SESSION['email']=$email;
           setcookie('email',$email, time()+60*60);
            header("Location:admin.php");
        }
        else{
            echo "password not match";
        }

    }
    else{
        echo "Email Not Match";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login

    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
    <form action=" " method="POST">
    <input type="email" placeholder="Email Address" name="email" require="">
    
    <input type="password" placeholder="Password" name="password" required=" ">
      <input type="checkbox" name="keep">
    <input type="submit" value="Login" name="login">
   
   
    </form>
    </div>
    
</body>
</html>