<?php $online = new mysqli("localhost", "root", "", "idb_exam"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Above 5000</title>
    <style>
        th,td,tr{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
        th{
            background-color: aqua;
        }
        td{
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
    <h2>Ans to the qn no.4</h2><hr>
    <h3>Price Above 5000</h3>
    
    <?php
        $data = $online->query("SELECT * FROM price_above_5000");

    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
        <?php while($ro = $data->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $ro['id'] ?></td>
                <td><?php echo $ro['name'] ?></td>
                <td><?php echo $ro['price'] ?></td>
                <td><?php echo $ro['manufacturer_id'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="manufacturer.php">Manufacturer List</a>
    
</body>
</html>