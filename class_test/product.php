<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans to the qn no.3</h1>
    <h3>Product List</h3>

    <?php
        if(isset($_REQUEST['submit'])){
            $pid = $_REQUEST["pid"];
            $obj = new porducts('products.txt');
            $obj -> price($pid);
        }

        class porducts{
            public $plists;

            public function __construct($x){
                $this->plists = file($x);
        }

        public function price($pid){
            foreach($this->plists as $plist){
                $line = explode(". ", $plist);
                list($id, $name, $price) = $line;
                if($id == $pid){
                    echo "<b>Product ID:</b> $id <br> <b>Product Name:</b> $name <br> <b>Product Price:</b> $price <br>";
                }
            }
        }
    }
    ?>
    <form action="" method="post">
        <select name="pid">
            <option value="">Select One</option>
            <option value="1">MSI</option>
            <option value="2">Samsung</option>
            <option value="3">Nvidia</option>
            <option value="4">Geforce</option>
            <option value="5">Asus</option>
        </select>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>