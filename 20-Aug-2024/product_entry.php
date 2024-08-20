<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Product Entry</h3>

    <?php
        if(isset($_REQUEST['submit'])){
            extract($_REQUEST);
            $sql = "INSERT INTO product (Id, Product_name, Product_details, Product_price, Product_quantity) VALUES (NULL, '$product', '$details', '$price', '$quantity')";

            require_once("dbconfig.php");
            $result = $db->query($sql);
            if($db->affected_rows){
                echo "Successfully added";
            }
            else{
                echo "Failed";
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
        <input type="submit" name="submit" value="SUBMIT">
        </fieldset>
    </form>
    <br>
    <a href="all_products.php">Product List</a>
    
</body>
</html>