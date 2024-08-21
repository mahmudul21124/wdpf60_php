<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrong{
            color: red;
        }
        .right{
            color: green;
        }
    </style>
</head>
<body>

    <?php

        if(isset($_REQUEST['submit'])){
            $info = $_FILES['photo'];
            $obj = new file($info);
            $obj->upload();

        }

        class file{
            public $fileinfo;
            public function __construct($x){
                $this->fileinfo = $x;
            }
            public function upload(){
                $info = $this->fileinfo;
                $name = $info['name'];
                $tmpname = $info['tmp_name'];
                $filesize = $info['size'];
                $allwoedsize = 512000;
                $allowedtypes = ["jpg", "jpeg", "png", "pdf"];
                $errors = array();

                $data = pathinfo($name);
                $ext = strtolower($data['extension']);

                if($filesize>$allwoedsize){
                    $errors[] = "<b class='wrong'> File size must be with in 500 kb</b>";
                }
                if(!in_array($ext, $allowedtypes)){
                    $errors[] = "<b class='wrong'> File types must be jpg, jpeg, png or pdf</b>";
                }
                if(count($errors)){
                    foreach($errors as $err){
                        echo $err . "<br>";
                    }
                }
                else{
                    if(move_uploaded_file($tmpname, "up/".$name)){
                        echo "<b class='right'> Upload successful</b>";
                    }
                }
        }
    }

    ?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="photo"><br>
        <input type="submit" name="submit" value="UPLOAD">
    </form>
    
</body>
</html>