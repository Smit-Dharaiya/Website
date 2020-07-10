<?php

session_start();
include('connection.php');

$mail=$_GET['email'];
$content=$_GET['content'];

 	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "dharaiyatexttiles@gmail.com";
    $to = $mail;
    $subject = "Response To Your Query";
    $message = $content;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>
