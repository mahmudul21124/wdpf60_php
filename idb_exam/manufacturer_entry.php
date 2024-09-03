<?php $online = new mysqli("localhost", "root", "", "idb_exam"); ?>
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

            $en = $online->query("CALL manufacturer_add('$name', '$addr', '$con')");

            if($en){
                echo "Successfully Added";
            }
        }
    ?>

    <form action="" method="post">
        <fieldset style="width: fit-content; background-color:aliceblue">
            <legend>Manufacturer Entry</legend>
        <input type="text" name="name" placeholder="Enter Manufacturer Name"><br>
        <textarea name="addr" id="" placeholder="Enter Address"></textarea><br>
        <input type="text" name="con" placeholder="Enter Contact Number"><br>
        <input type="submit" name="submit" value="ADD">
        </fieldset>
    </form>
    <br>
    <h3>Manufacturer List</h3>
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
    </form>
    <br>
    <a href="manufacturer.php">Manufacturer List</a>
    
</body>
</html>