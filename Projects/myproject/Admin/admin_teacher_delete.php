<?php
require_once "dbconfig.php";

// if(isset($_GET['did'])){
    $id = $_REQUEST['did'];

    // $result = $db->query("SELECT id FROM teachers WHERE id='$id'");

    // if($result->num_rows>0){
    $sql = "DELETE FROM teachers WHERE id ='$id'";

    $delete = mysqli_query($db,$sql);


    if($delete){
        echo "Delete";

        header("Location:manage_teacher.php");
    }
    // }
     else{
       echo 'No application found';
     }

// }
?>