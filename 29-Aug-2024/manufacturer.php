<?php $online = new mysqli("localhost", "root", "", "tclk60") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
    <style>
        .g{
            color: green;
        }
    </style>
</head>
<body>
    <h2>Ans to the qn no.3</h2><hr>
    

    <?php
        if(isset($_POST['delete'])){
            $mid = $_POST['com'];
         $ab = "DELETE FROM manufacturer WHERE id='$mid'";
         $delete = $online->query($ab);
        //  $delete = mysqli_query($online, $ab);
        

        if($delete){
            echo "<h3 class='g'>Sucessfully deleted</h3>";
        }else{
            echo "Not deleted";
        }
        }
    ?>
    <?php
        $s = "SELECT * FROM manufacturer";
        $data = $online->query($s);
    ?>
    <h3>Manufacturer List</h3>

    <form action="" method="post">
        <select name="com">
            <option value="">SELECT ONE</option>
            <?php while($row = $data->fetch_assoc()){?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?> <?php echo $row['name'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="delete" value="DELETE">
    </form>
    <br>
    <a href="product_above_5000.php">Product List</a><br>
    <a href="manufacturer_entry.php">Manufacturer Entry</a>
    
</body>
</html>