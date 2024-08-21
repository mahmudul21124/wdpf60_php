<?php require_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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
    <h3>Product List</h3>
    <?php
        //   $sql = "SELECT * FROM product";
        $sql = "SELECT * FROM product, categories WHERE categories.id = product.Product_category";
          $data = $db->query($sql);?>
        
         <table> 
            
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Details</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Action</th>  
            </tr>
  <?php     while($row = $data->fetch_assoc()){?>
            
          <tr>
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['Product_name']?></td>
            <td><?php echo $row['Product_details']?></td>
            <td><?php echo $row['Product_price']?></td>
            <td><?php echo $row['Product_quantity']?></td>
            <td><?php echo $row['name']?></td>
            <td><a onclick="return confirm('Are you sure to delete?')" href="product_delete.php?pid=<?php echo $row['Id']?>"><img src="bin.png" alt="" width="15"></a> |
            <a href="product_edit.php?pid=<?php echo $row['Id']?>"><img src="pencil.png" alt="" width="15"></a></td>
          </tr>
        <?php    }?>
        
        </table>
        <br>
        <a href="product_entry.php">New Product</a>
    
</body>
</html>