<?php
    session_start();

    if(!isset($_SESSION['mail'])){
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is home page</h1>
    <a href="logout.php">LOGOUT</a>
    
</body>
</html>