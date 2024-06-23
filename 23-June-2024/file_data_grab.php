<?php

    $data = file("users.txt");          // external txt file link

    echo "<pre>"; 
    print_r($data);
    echo "<hr>";



    echo "<table border='1'>";
    echo "<caption>Employee Information</caption>";
    echo "<tr><th>Name</th><th>Professional</th><th>Color</th></tr>";

   foreach($data as $item){
    $line = explode("|",$item);             // dividing lines as array, (explode is a inbuilt method)
    // print_r ($line) . "<br>";

    list($name, $prof, $color) = $line;
    echo "<tr><td>{$name}</td><td>{$prof}</td><td>{$color}</td></tr>";
   }
   echo "</table>";

?>