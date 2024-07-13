<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Check</title>
</head>
<body>
    <h1>Students Result</h1>

    <?php
        if(isset($_POST['submit'])){
            $stid = $_POST["sid"];
            $obj = new reports('result.txt');
            $obj-> result("$stid");
        }

        class reports{
            public $datas;

            public function __construct($s){
                $this->datas = file($s);
        }

        public function result($stid){
            foreach($this->datas as $r){
                $k = explode(", ", $r);
                list($id, $name, $score, $result) = $k;
                
                if( $id == $stid){
                echo "<b>ID:</b> $id <br> <b>Name:</b> $name <br> <b>Score:</b> $score <br> <b>Result: </b> $result";
    }
}
        }
    }

    ?>
    <form action="" method="post">
        <select name="sid">
            <option value="">Select One</option>
            <option value="1">Rummana</option>
            <option value="2">Saif</option>
            <option value="3">Jamil</option>
            <option value="4">Rakib</option>
        </select>
        <input type="submit" name="submit" value="RESULT">
    </form>
    
</body>
</html>