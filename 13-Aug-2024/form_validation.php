<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            color: red;
        }
        b{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>


    <?php

        if(isset($_REQUEST['submit'])){
            $msg = form_validation();

            if($msg){
                echo "<ul>";
                foreach($msg as $m){
                    echo "<li> $m </li>";
                }
                echo "</ul>";
            }
            else{
                echo "<b>Validation ok</b>";
            }

        }

        function form_validation(){
            $errors= [];

            // full name
            $fullname = $_REQUEST['fullname'];
            if($fullname == ""){
                $errors[] = "You must enter fullname"; 
            }
            // Gender
            if(isset($_REQUEST['gender'])){
                $gender = $_REQUEST['gender'];
                if ($gender == ""){
                    $errors[] = "You must enter gender";
                }
            }
            else {
                if(empty($gender)){
                $errors[] = "You must enter gender";
            }
        }
            // district
            $district = $_REQUEST['district'];
            if ($district == ""){
                $errors[] = "You must select a district";
            }
            // address
            $address = $_REQUEST['address'];
            if ($address == ""){
                $errors[] = "You must enter address";
            }
            // Hobbies
            $hobbies = $_REQUEST['hobbies'];
            if(empty($hobbies)){
                $errors[] = "You must select one";
            }

            return $errors;
        }


    ?>

    <form method="post">
        Name <br>
        <input type="text" name="fullname" placeholder="Enter your name"><br>
        Gender <br>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <br>
        District <br>
        <select name="district" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
            <option value="Pabna">Pabna</option>
            <option value="Gopalganj">Gopalganj</option>
        </select><br>
        Hobbies <br>
        <input type="checkbox" name="hobbies[]" value="cricket" checked>Cricket
        <input type="checkbox" name="hobbies[]" value="football">Football
        <input type="checkbox" name="hobbies[]" value="hockey">Hockey
        <input type="checkbox" name="hobbies[]" value="tenis">Tenis <br>
        Address <br>
        <textarea name="address" placeholder="Enter address"></textarea><br>
        <input type="submit" name="submit" value="Register">
    </form>
    
</body>
</html>