<?php
$to_email = "rizvyakter19@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, I am shamim sorkar.I love u dear";
$headers = "From: mdshamimsorkar19@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>