<?php
    $id = $_GET['pid'];

    require_once("dbconfig.php");

    $result = $db->query(("DELETE FROM categories WHERE id='$id'"));

    if($result){
        header("Location:categories.php");
    }



?>