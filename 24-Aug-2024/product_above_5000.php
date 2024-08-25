<!-- $db = new mysqli("localhost", "root", "", "evidence") -->
<?php require_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Above 5000</title>
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
    <h3>Product List</h3>

    <?php
        $sql = "SELECT * FROM products_above_5000";

        $data = $db->query($sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
        <?php while($row = $data->fetch_assoc()){?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_id'] ?></td>
            </tr>

      <?php  } ?>
    </table>
    <br>
    <a href="../25-Aug-2024/manufacturer.php">All Manufacturers</a>
    
</body>
</html>