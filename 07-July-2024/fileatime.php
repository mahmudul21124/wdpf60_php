<?php
    $file = 'files/users.txt';
    echo fileatime($file);
    echo "<br>";

    echo "Last Created Time: " . date("m-d-y g:i:sa", filectime($file)) ."<br>";
    echo "Last Modified Time: " . date("m-d-y g:i:sa", filemtime($file)) ."<br>";   
    echo "Last Access Time: " . date("m-d-y g:i:sa", fileatime($file)) ."<br>"; 
    echo "<hr>";

    $file1 = 'files/saif.txt';
    

    echo "Last Changed Time: " . date("m-d-y g:i:sa", filectime($file1)) ."<br>";
    echo "Last Modified Time: " . date("m-d-y g:i:sa", filemtime($file1)) ."<br>";   
    echo "Last Access Time: " . date("m-d-y g:i:sa", fileatime($file1)) ."<br>";
    echo "<hr>";
    
?>