<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students Result with oop</h1>
    
    <?php
        if(isset($_POST["submit"])){
            $stid = $_POST["sid"];
            $obj = new reports('result.txt');
            $obj-> result($stid);
        }

        class reports{
            public $infos;

            public function __construct($x){
                $this->infos = file($x);
            }

            public function result($stid){
                foreach($this->infos as $info){
                    $li = explode(". ", $info);
                    list($id, $name, $mark, $result) = $li;
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