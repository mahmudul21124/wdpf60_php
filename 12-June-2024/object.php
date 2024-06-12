<?php

class Appliance{
    private $_power;
    
    function setPower($status){
        $this->_power = $status;
    }
}

$blender = new Appliance;

$blender->setPower("on");

print_r($blender);
echo "<br>";
var_dump($blender);
echo "<hr>";
?>

<?php

class Student{
    public $name;
    public $age;

    function register($fname, $fage){
        $this->name = $fname;
        $this->age = $fage;
    }
}

$student1 = new Student;

$student1->register("Masud", 20);

print_r($student1);
echo "<br>";
var_dump($student1);
?>