<?php
    class test{
        public $name;
        private $mobile;
        function __construct($name, $mobile){
            $this->name = $name;
            $this->mobile = $mobile;
        }
    }
    echo "<pre>";
    $obj1 = new test("Farhaan" , "01700000000");
    echo "Result Before Copy \n";
    print_r($obj1);
    echo "After Copy Both Object will show same result\n";
    $obj2 = $obj1; //Copy of the object
    $obj2->name = "Habibr";
    print_r($obj1);
    print_r($obj2);
    echo "<hr>";
?>

<?php

    echo "<b>By using clone</b>";
    class test1{
        public $name;
        private $mobile;
        function __construct($name, $mobile){
            $this->name = $name;
            $this->mobile = $mobile;
        }
    }
    echo "<pre>";
    $obj1 = new test1("Farhaan" , "01700000000");
    echo "Result Before Copy \n";
    print_r($obj1);
    $obj2 = clone $obj1; //Copy of the object
    $obj2->name = "Habibr";
    print_r($obj1);
    echo "<br>";
    print_r($obj2);                                                                             
?>