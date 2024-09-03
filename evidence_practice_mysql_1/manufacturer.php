<?php $online = new mysqli("localhost", "root", "", "evidence2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer List</title>
    <style>
        th,tr,td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<h2>Ans to the qn no.3</h2><hr>
<h3>Manufacturer List</h3>
    <?php
        if(isset($_POST['delete'])){
            $com = $_POST['com'];

            $delete = $online->query("DELETE FROM manufacturer WHERE id = '$com'");

            if($delete){
                echo "Successfully Deleted";
            }
        }
    ?>

    <?php
        $data = $online->query("SELECT * FROM manufacturer");
    ?>
    
    
    <form action="" method="post">
        <select name="com" id="">
            <option value="">SELECT ONE</option>
            <?php while($row = $data->fetch_assoc()){ ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?> <?php echo $row['name'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="delete" value="DELETE">
    </form>
    <br>

    <h3>Product</h3>

    <?php  
        $data = $online->query("SELECT * FROM price_above_5000");
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer</th>
        </tr>
        <?php while($roe = $data->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $roe['id'] ?></td>
            <td><?php echo $roe['name'] ?></td>
            <td><?php echo $roe['price'] ?></td>
            <td><?php echo $roe['manufacturer_id'] ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="manufacturer_entry.php">Manufacturer Entry</a><br>
    <a href="price_above_5000.php">Product list</a>
</body>
</html>