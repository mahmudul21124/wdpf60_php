<?php require_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Edit</title>
</head>
<body>
    <h3>Categories Edit</h3>

    <?php
        $id = $_REQUEST['pid'];

        if(isset($_REQUEST['update'])){
            extract($_REQUEST);

            $sql = "UPDATE categories SET name = '$category' WHERE id='$id'";

            $result = $db->query($sql);
            if($db->error){
                echo "Failed";
            }
            else{
                echo "Successfully added";
            }
        }

        $sql = "SELECT * FROM categories WHERE id='$id'";
        $data = $db->query($sql);
        $row = $data->fetch_object();

    ?>

    <form method="post">
        <fieldset>
            <legend>Categories Edit</legend>
            Categories Name: <br> <input type="text" name="category" placeholder="Enter category name" value="<?php echo $row->name ?>"><br>
            <input type="submit" name="update" value="UPDATE">
            <input type="hidden" name="pid" value="<?php echo $id?>">
        </fieldset>
    </form>
    <br>
    <a href="categories.php">Categories List</a>
    
</body>
</html>