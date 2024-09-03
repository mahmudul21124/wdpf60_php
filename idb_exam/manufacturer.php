<?php $online = new mysqli("localhost", "root", "", "idb_exam"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
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
    <h2>Ans to the qn no.3</h2><hr>
    <h3>Manufacturer List</h3>

    <?php
        if(isset($_POST['delete'])){
            $id = $_POST['com'];

            $delete = $online->query("DELETE FROM manufacturer WHERE id = '$id'");

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
            <option value="">Selete One</option>
            <?php while($ro = $data->fetch_assoc()){ ?>
                <option value="<?php echo $ro['id'] ?>"><?php echo $ro['id'] ?> <?php echo $ro['name'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="delete" value="DELETE">
    </form>
    <br>
    <br>
    <h3>Product List</h3>
    <?php
        $dat = $online->query("SELECT * FROM price_above_5000");

    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
        <?php while($row = $dat->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_id'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="manufacturer_entry.php">Manufacturer Entry</a><br>
    <a href="price_above_5000.php">Product List</a>
    
</body>
</html>