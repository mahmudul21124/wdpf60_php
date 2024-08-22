<?php require_once("dbconfig.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Entry</title>
</head>
<body>
    <h3>Product Entry</h3>

    <?php

        // Categoty list collect
        $sql = "SELECT * FROM categories";
        $cats = $db->query($sql);


        if(isset($_REQUEST['submit'])){
            extract($_REQUEST);
            $sql = "INSERT INTO product (Id, Product_name, Product_details, Product_price, Product_quantity, Product_category) VALUES (NULL, '$product', '$details', '$price', '$quantity', '$category')";

            $result = $db->query($sql);
            if($db->error){
                echo "Failed";
            }
            else{
                echo "Successfully added";
            }
        }
    ?>

    <form method="post ">
        <fieldset style="width: fit-content;">
        <legend>Product Entry</legend>
        Product Name: <br><input type="text" name="product" placeholder="Enter product name"><br>
        Product Details: <br><textarea name="details" placeholder="Enter product details"></textarea><br>
        Product Price: <br><input type="text" name="price" placeholder="Enter product price"><br>
        Product Quantity: <br><input type="number" name="quantity" placeholder="Enter product quantity"><br>
        Product Category: <br> 
        <select name="category">
            <option value="">Select One</option>
            <?php 
                while($row = $cats->fetch_assoc()){?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>;
        <?php   } ?>
        </select><br>
        <input type="submit" name="submit" value="SUBMIT">
        </fieldset>
    </form>
    <br>
    <a href="all_products.php">Product List</a>
    
</body>
</html>