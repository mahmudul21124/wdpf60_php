<?php
$value1 = "Hello";
$value2 =& $value1;             // $value1 and $value2 both equal "Hello"

$value2 = "Goodbye";            // $value1 and $value2 both equal "Goodbye"

$value1 = "Today is last class before EID";

echo $value2;
?>