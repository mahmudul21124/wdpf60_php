<?php
    include_once("dbconfig.php");

    session_start();

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pass = md5($pass);

        $result = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
        $row = $result->fetch_assoc();
        
        if($result->num_rows == 0){
            $_SESSION['err'] = "Email or Password is wrong";
            header("Location: index.php");
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['fullname'];
            header("Location: dashboard.php");
        }
    }

?>