<?php $online = new mysqli("localhost", "root", "", "tclk60") ?>

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
    <h2>Ans to the qn no.4</h2><hr>
    <h3>Products Above 5000 Price</h3>

    <?php
        $s = "SELECT * FROM product_above_5000";
        $data = $online->query($s);

    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
        <?php while($row = $data->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td style="text-align: center;"><?php echo $row['manufacturer_id'] ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="manufacturer.php">Manufacturer List</a><br>
    <a href="manufacturer_entry.php">Manufacturer Entry</a>
</body>
</html>