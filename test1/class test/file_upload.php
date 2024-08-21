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
    <h2>Ans to the qn no.1</h2><hr>
    <h3>File Upload</h3> 

    <?php
        if(isset($_REQUEST['submit'])){
            $info = $_FILES['file'];
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
                $allowedsize = 409600;
                $allowedtypes = ["jpg", "jpeg", "png", "pdf", "doc", "docx"];
                $errors = array();

                $data = pathinfo($name);
                $ext = strtolower($data['extension']);

                if($filesize>$allowedsize){
                    $errors[] = "<b class='wrong'> File size must be with in 400 kb</b>";
                }
                if(!array_search($ext, $allowedtypes)){
                    $errors[] = "<b class='wrong'> File type must be jpg, jpeg, png, pdf, doc or docx</b>";
                }
                if(count($errors)){
                    foreach($errors as $err){
                        echo $err . "<br>";
                    }
                }
                else{
                    if(move_uploaded_file($tmpname, "up/".$name)){
                        echo "<b class='right'> Upload sucessful</b>";
                    }
                }
            }
        }

    ?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="UPLOAD">
    </form>
    
</body>
</html>