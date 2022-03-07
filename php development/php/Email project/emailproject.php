<?php
if(isset($_POST['send_message'])){
    /*echo "<pre>" ;
    print_r($_POST);
    echo "</pre>" ;
    */
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $errors=array();
    $to="rizvyakter19@gmail.com";
    $headers="From: ".$email . "\r\n";
    $headers .="Content-type:html/text \r\n";
    if ($name==''){
        $errors['name']="Name is blank";
    }
    if ($subject==''){
        $errors['subject']="Subject is blank";
    }
    if(empty($email)){
        $errors['email']="Email is blank";
    }
    if(empty($message)){
        $errors['message']="Message is blank";
    }
   //echo  count($errors);
   if(count($errors)==0){
       if(mail($to,$subject,$message, $headers)){
       $message = "Message send successfully!";
       }
       else {
           $message="Message not send";
       }
   }
    

   // print_r($errors);
 /*if($name==NULL){
     echo "Name  is blank";
 }
 */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action =" " method="POST">
<input type ="text" name="name" placeholder="Name">
<p class="errors"> <?php 
if(isset($errors['name'])){
    echo $errors['name'];
}
 ?></p>
<br>
<input type ="text" name="subject" placeholder="subject">
<p class="errors"> <?php 
if(isset($errors['subject'])){
    echo $errors['subject'];
}
?></p>
<br>
<input type ="email" name="email" placeholder="Email Address">
<p class="errors"> <?php 
if(isset($errors['email'])){
    echo $errors['email'];
}
 ?></p>
<br>
<textarea placeholder="Message" name="message"></textarea>
<p class="errors"> <?php 
if(isset($errors['message'])){
    echo $errors['message'];
}
 ?></p>
<br>
<input type ="submit" value="Send Message" name="send_message">
 </form>
 <p><?php if(isset($message)){
     echo $message;
 }
 ?>
 </p>
</body>
</html>