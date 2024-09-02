<?php  $online = new mysqli("localhost", "root", "", "evidence1"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Above 5000</title>
    <style>
        th,td,tr{
            border: 1px solid;
            color: blueviolet;
        }
        table{
            border-collapse: collapse;
        }
        th{
            background: pink;
            
        }
    </style>
</head>
<body>
    <h2>Ans to the qn no.4</h2><hr>
    <h3>Product Above 5000</h3>
    <?php
        $data = $online->query("SELECT * FROM product_above_5000");
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer</th>
        </tr>
        <?php while($row = $data->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['manufacturer_id'];?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>