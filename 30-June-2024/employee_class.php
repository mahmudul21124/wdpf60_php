<?php

    class Employee{
        public $name;
        public $age;
        public $address;
        public function info(){
            $full = "";
            $full .= "Name: " . $this->name . "<br>";
            $full .= "Age: ". $this->age . "<br>";
            $full .= "Address: ". $this->address;
            return $full;
        }
    }    //End of class

    $obj1 = new Employee;

    $obj1->name = "Rakib";
    $obj1->age = 20;
    $obj1->address = "Narayanganj";
    
    echo $obj1->name;
    echo "<hr>";
    echo $obj1->info();

?>