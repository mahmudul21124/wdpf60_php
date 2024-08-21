<?php

$id = $_GET['pid'];

require_once("dbconfig.php");

$result = $db->query("DELETE FROM product WHERE Id= '$id'");

if($result){
    header("Location:all_products.php");
}



?>