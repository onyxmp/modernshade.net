<?php
session_start();

    $email_to = "erik@onyxmp.com"; // change with your email
    $name     = $_POST['name'];  
    $email    = $_POST['email'];
    $phone   = $_POST['phone'];
    $subject   = $_POST['subject'];
    $message    = $_POST['message'];
    
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo "success";       
    } 
    else{
        echo "failed";     
    }  
?>
