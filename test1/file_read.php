<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if(isset($_REQUEST['submit'])){
            $stid = $_REQUEST['stid'];
            $st = new student('result.txt');
            $st->result($stid);
        }

        class student{
            public $datas;
            public function __construct($x){
                $this->datas = file($x);
            }
            public function result($stid){
                foreach($this->datas as $data){
                    $line = explode(".", $data);
                    list($id, $name, $result) = $line;
                    if($id==$stid){
                        echo "<b>ID:</b> $id <br> <b>Name:</b> $name <br> <b>Result:</b> $result ";
                    }
                }
            }
        }

    ?>

    <form method="post">
        <select name="stid">
            <option value="">Select One</option>
            <option value="1">Saif Jahan</option>
            <option value="2">Jamil Hossain</option>
            <option value="3">Umme Rummana</option>
        </select>
        <input type="submit" name="submit" value="SHOW RESULT">
    </form>
    
</body>
</html>