<?php require_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
        th,td,tr{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h3>Categories</h3>
    <?php
        $sql = "SELECT * FROM categories";

        $data = $db->query($sql);?>

        <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                <?php 
                    while($row = $data->fetch_assoc()){?>

                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><a onclick="return confirm('Are you sure to delete?')" href="categories_delete.php?pid=<?php echo $row['id']?>"><img src="bin.png" alt="" width="15"></a> | <a href="categories_edit.php?pid=<?php echo $row['id']?>"><img src="pencil.png" alt="" width="15"></a></td>
                </tr>
                <?php    } ?>
                
        </table>
        <br>
        <a href="categories_entry.php">New Product</a>

    
</body>
</html>