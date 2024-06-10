<?php

$x = 5;
$y = 10;
$p = 30;

function myTest()
{
    // global $x, $y;
    $x = 3; $y = 2;
    $y = $x + $y;
}

myTest();
echo $y; 
echo "<br>";

echo "<pre>";
print_r($GLOBALS);


?>