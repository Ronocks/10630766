<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
 $name = $_POST["name"];
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];

$to = "conormcphillips129@gmail.com";
$headers = "From: $email";

if(mail($to, $subject, $message, $headers))
{
 //echo "Mail Sent";
 header("Location: thanks.php");
}
else
{
    echo "Mail Failed";
}


}

?>