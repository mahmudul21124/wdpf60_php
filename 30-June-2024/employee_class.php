<?php

    class Employee{
        private $name;
        public $age;
        public $address;
        protected $phone;
        protected $wage;

        public function setName($name){
            $this->name = $name;
        }

        public function setWage($wage){
            $this->wage = $wage;
        }
        public function info(){
            $full = "";
            $full .= "Name: " . $this->name . "<br>";
            $full .= "Age: ". $this->age . "<br>";
            $full .= "Address: ". $this->address . "<br>";
            $full .= "Salary ". $this->wage;
            return $full;
        }
    }    //End of class

    class Programmer extends Employee{
        public $wage = 10000;
        public function bonus($percent){
            return $this->wage * $percent;
        }
    }

    $obj1 = new Employee;

    // $obj1->name = "Rakib";
    $obj1->setName("Rakib");
    $obj1->setWage(5000);
    $obj1->age = 27;
    $obj1->address = "Narayanganj";
    
    
    
    echo "<hr>";
    echo $obj1->info();

    echo "<hr>";
    $prog1 = new Programmer;
    echo "Salary: ". $prog1->wage;
    echo "<br>";
    echo "Bonus: ". $prog1->bonus(".10");

?>