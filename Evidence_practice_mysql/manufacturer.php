<?php $onlinea = new mysqli("localhost", "root", "", "evidence1"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>
<body>
    <?php  
        if(isset($_POST['delete'])){
            $iid = $_POST['company'];

        $onlinea->query("DELETE FROM manufacturer WHERE id='$iid'");

        if($onlinea->affected_rows){
            echo "Sucessfully Deleted";
        }
        }
    ?>

<?php 
        $result = $onlinea->query("SELECT * FROM manufacturer");
    ?>
    <h2>Ans to the qn no.2</h2>
    <h3>Manufacturer</h3>

    <form action="" method="post">
        <select name="company" id="">
            <option value="">Select One</option>
            <?php  while($row = $result->fetch_assoc()){ ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?> <?php echo $row['name'] ?></option>
            <?php } ?>
        </select>
        
        <input type="submit" name="delete" value="DELETE">
    </form>
    <br>
    <a href="product_above_5000.php">Product list</a><br>
    <a href="manufacturer_entry.php">Manufacturer Entry</a>
</body>
</html>