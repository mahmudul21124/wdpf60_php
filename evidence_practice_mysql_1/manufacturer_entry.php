<?php $online = new mysqli("localhost", "root", "", "evidence2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
</head>
<body>
    <h2>Ans to the qn no.2</h2><hr>
    <h3>Manufacturer Entry</h3>

    <?php
        if(isset($_POST['submit'])){
            extract($_POST);
            $result = $online->query("CALL add_manufacturer('$name', '$address', '$contact')");

            if($result){
                echo "Successfully Added";
            }
        }
    ?>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Manufacturer Name"><br>
        <textarea name="address" id="" placeholder="Enter Address"></textarea><br>
        <input type="text" name="contact" placeholder="Enter contact number"><br>
        <input type="submit" name="submit" value="ADD">
    </form>
    <br>
    <?php
        $data = $online->query("SELECT * FROM manufacturer");
    ?>
    
    <h3>Manufacturer List</h3>
    
    <form action="" method="post">
        <select name="com" id="">
            <option value="">SELECT ONE</option>
            <?php while($row = $data->fetch_assoc()){ ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?> <?php echo $row['name'] ?></option>
            <?php } ?>
        </select>
    </form>
    <br>
    <a href="manufacturer.php">Manufacturer List</a>
    
</body>
</html>