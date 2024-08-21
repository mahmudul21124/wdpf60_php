<?php require_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update</title>
</head>
<body>
    <h3>Product Edit</h3>

    <?php
        $id = $_REQUEST['pid'];
        
        
        if(isset($_REQUEST['update'])){
            extract($_REQUEST);

            $sql = "UPDATE product SET Product_name = '$product', Product_details =  '$details', Product_price = '$price', Product_quantity = '$quantity' WHERE Id='$id'";

            
            $result = $db->query($sql);
            if($db->affected_rows){
                echo "Successfully Updated";
            }
            else{
                echo "Failed";
            }
        }


        // Getting data from table
        $sql = "SELECT * FROM product WHERE Id='$id'";
        $data = $db->query($sql);
        $row = $data->fetch_object();
        // print_r($row);

    ?>

    <form method="post ">
        <fieldset style="width: fit-content;">
        <legend>Product Edit</legend>
        Product Name: <br><input type="text" name="product" placeholder="Enter product name" value="<?php echo $row->Product_name?>"><br>
        Product Details: <br><textarea name="details" placeholder="Enter product details"><?php echo $row->Product_details?></textarea><br>
        Product Price: <br><input type="text" name="price" placeholder="Enter product price" value="<?php echo $row->Product_price?>"><br>
        Product Quantity: <br><input type="number" name="quantity" placeholder="Enter product quantity" value="<?php echo $row->Product_quantity?>"><br>
        <input type="submit" name="update" value="UPDATE">
        <input type="hidden" name="pid" value="<?php echo $id?>">
        </fieldset>
    </form>
    <br>
    <a href="all_products.php">Product List</a>
    
</body>
</html>