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

            $obj = new Student("result.txt");

            $obj->show_result($stid);
        }

        class Student{

            public $datas;
            public $arrayData;

            public function __construct($file){
                $this->datas = $file;
                $this->arrayData = file($this->datas);
            }

            public function show_result($stid){
                
                foreach($this->arrayData as $data){
                    $line = explode("|", $data);
                    list($id, $name, $score, $result) = $line;
                    if($id == $stid){
                        $output = "ID: $id <br> Name: $name <br> Score: $score <br> Result: $result";
                    }
                }
                echo $output;
            }
        }
        
    ?>

    <form action="" method="post">
        <select name="stid" id="">
            <option value="">Select One</option>
            <option value="1">Saif</option>
            <option value="2">Jamil</option>
            <option value="3">Rummana</option>
        </select>
        <input type="submit" name="submit" value="Show Result">
    </form>
    
</body>
</html>