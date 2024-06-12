<?php

printf("Bar inventory: %d bottles of tonic %s.", 100 , "water");    // sequenc wise it will show
echo "<br>";
printf("%d bottles of tonic water cost $%f.", 100, 43.20);
echo "<br>";
printf("$%.2f", 43.2);
echo "<br>";

$cost = sprintf("$%.2f", 43.2);
echo $cost;
?>