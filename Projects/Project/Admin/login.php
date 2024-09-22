<?php
    require_once "dbconfig.php";
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        //$password = md5($password);
        $usertype = $_POST['usertype'];
    }

    if($usertype==1){
        $sql1 = $db->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
        $row = $sql1->fetch_assoc();
        if($sql1->num_rows){
            // Session
            $_SESSION['email'] = $email;
            $_SESSION['utype'] = $usertype;
            $_SESSION['name'] = $row['name'];
            $_SESSION['photo'] = $row['photo'];
            $_SESSION['id'] = $row['id'];
            // Redirect
            header("Location:dashboard.php");
        }
    }

    if($usertype==2){
        $sql2 = $db->query("SELECT * FROM teachers WHERE email='$email' AND password='$password'");
        $row = $sql2->fetch_assoc();
        if($sql2->num_rows){
            // Session
            $_SESSION['email'] = $email;
            $_SESSION['utype'] = $usertype;
            $_SESSION['name'] = $row['name'];
            $_SESSION['photo'] = $row['photo'];
            $_SESSION['id'] = $row['id'];
            // Redirect
            header("Location:teacher_dashboard.php");
        }
    }

    if($usertype==3){
        $sql3 = $db->query("SELECT * FROM students WHERE email='$email' AND password='$password'");
        $row = $sql3->fetch_assoc();
            if($sql3->num_rows){
            // Session
            $_SESSION['email'] = $email;
            $_SESSION['utype'] = $usertype;
            $_SESSION['name'] = $row['name'];
            $_SESSION['photo'] = $row['photo'];
            $_SESSION['id'] = $row['id'];

            // Redirect
            header("Location:student_dashboard.php");
        }
    }


?>