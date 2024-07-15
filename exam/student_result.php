<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Result</title>
</head>
<body>
    <h1>Ans to the qn no.2</h1><hr>
    <h3>Students Result</h3>

    <?php
        if(isset($_POST['submit'])){
            $sid = $_POST["sid"];
            $obj = new students('students.txt');
            $obj-> result($sid);
        }

        class students{
            public $slists;

            public function __construct($a){
                $this->slists = file($a);
        }

        public function result($sid){
            foreach($this->slists as $slist){
                $len = explode(".", $slist);
                list($id, $name, $batch) = $len;
                if($id == $sid){
                    echo "<b>ID:</b> $id <br> <b>Name:</b> $name <br> <b>Batch:</b> $batch";
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
            <option value="4">Mohiuddin</option>
            <option value="5">Arif</option>
        </select>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>