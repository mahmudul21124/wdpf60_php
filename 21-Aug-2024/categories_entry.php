<?php require_once("dbconfig.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Entry</title>
</head>
<body>
    <h3>Category Entry</h3>

    <?php
        $sql = "SELECT * FROM categories";
        $cat = $db->query($sql);

        if(isset($_REQUEST['submit'])){
            extract($_REQUEST);
            $sql = "INSERT INTO categories (id, name) VALUES (NULL, '$category')";

            $result = $db->query($sql);
            if($db->error){
                echo "Failed";
            }
            else{
                echo "Successfully added";
            }
        }

    ?>

    <form method="post">
        <fieldset style="width: fit-content;">
            <legend>Category Entry</legend>
            Category Name: <br><input type="text" name="category" placeholder="Enter category name"><br>
            <input type="submit" name="submit" value="SUBMIT">
        </fieldset>
    </form>
    <br>
    <a href="categories.php">Category List</a>
    
</body>
</html>