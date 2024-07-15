<?php

    $userEmail = "hossainjamil@gmail.com";
    $userPass = "123456";

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if($userEmail == $email && $userPass == $pass) {
        session_start();
        $_SESSION['mail'] = $email;
        header("Location: h.php");
    }
    else{
        header("Location: login.php");
    }

    
   
    
?>