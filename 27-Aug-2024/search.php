<?php $conn = new mysqli("localhost", "root", "", "classicmodels") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search Products</h3>

    <?php
        if(isset($_GET['search'])){
            $term = $_GET['term'];

            $sql = "SELECT productCode, productName, productLine, buyPrice FROM products WHERE productName LIKE '%$term%'";
            $data = $conn->query($sql);

            $records = $data->num_rows;

            echo "Searched with <b>$term</b> word & found <b>$records</b> records";
        }

    ?>

    <form action="" method="get">
        <input type="text" name="term" placeholder="Search Here">
        <input type="submit" name="search" value="SEARCH">
    </form>

    <?php
        while($row = $data->fetch_assoc()){
            echo "<b>Product Code</b>: ". $row['productCode']. "<br>";
            echo "<b>Product Name:</b> ". $row['productName']. "<br>";
            echo "<b>Product Line:</b> ". $row['productLine']. "<br>";
            echo "<b>Buy Price:</b> ". $row['buyPrice']. "<hr>";
        }

    ?>
    
</body>
</html>