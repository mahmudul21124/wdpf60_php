<?
    class Employee{
        public $name;
        public function __set($propName, $propValue){
            $this->$propName = $propValue;
        }
    }

    $emp1 = new Employee;
    echo $emp1->name = "Saif Jahan";
    echo "<br>";
    echo $emp1->phone = "5464654";
?>


