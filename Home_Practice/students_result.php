<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students result with oop</h1>

    <?php
        if(isset($_POST['submit'])){
            $stid = $_POST["sid"];
            $obj = new students('result.txt');
            $obj-> result($stid);
        }

        class students{
            public $li;

            public function __construct($x){
                $this->li = file($x);
            }

            public function result($stid){
                foreach($this->li as $lis){
                    $line = explode(". ", $lis);
                    list($id, $name, $mark, $result) = $line;
                    if($id == $stid){
                        echo "<b>ID:</b> $id <br> <b>Name:</b> $name <br> <b>Mark:</b> $mark <br> <b>Result:</b> $result";
                    }
                }
            }
        }
    


    ?>
    <form action="" method="post">
        <select name="sid">
            <option value="">Select One</option>
            <option value="1">Rakib</option>
            <option value="2">Saif</option>
            <option value="3">Jamil</option>
            <option value="4">Noman</option>
            <option value="5">Arif</option>
        </select>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>