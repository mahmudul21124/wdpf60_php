<?php $mysqli = new mysqli("localhost", "root", "", "evidence"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .g{
            color: green;
        }
    </style>
</head>
<body>

    <?php
        if(isset($_POST['submit'])){
            $id = $_POST['company'];

            $mysqli->query("DELETE FROM manufacturer WHERE id ='$id'");
            
            if($mysqli->affected_rows){
                echo "<h1 class='g'> Successfully Deleted";
            }
        }
    ?>
    <?php 
        $result = $mysqli->query("SELECT * FROM manufacturer");
    ?>
    <h3>All Manufacturers</h3>

    <form method="post">
        <select name="company">
            <option value="">Select One</option>
            <?php while($row= $result->fetch_object()){?>
                <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
            <?php } ?>   
        </select>
        <input type="submit" name="submit" value="DELETE">
    </form>
    <br>
    <a href="../24-Aug-2024/product_above_5000.php">All Manufacturers</a>
    
</body>
</html>