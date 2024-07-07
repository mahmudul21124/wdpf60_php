<?php
    // read mode


    $fh = fopen('files/users.txt', 'r');
    // print_r($fh);
    // echo fgets($fh);
    
    
    while (!feof($fh)) {
        echo fgets($fh) . "<br>";
    }

    
    fclose($fh);
    echo"<hr>";
?>

<?php
    // write mode


    // $fh = fopen('files/users.txt', 'w');

    // fwrite($fh,'Hello Everybody');
    // fclose($fh);
    
    // $fh = fopen('files/users.txt', 'r');
    // while (!feof($fh)) {
    //     echo fgets($fh) . "<br>";
    // }

    
    // fclose($fh);
    // echo "<hr>";
?>


<?php
    // append mone (can read & write but previous sentence will be intect)


    $fh = fopen('files/users.txt', 'a');

    fwrite($fh,'<br>Hello Everybody');
    fclose($fh);
    
    $fh = fopen('files/users.txt', 'r');
    while (!feof($fh)) {
        echo fgets($fh) . "<br>";
    }

    
    fclose($fh);

    unlink('files/users.txt');

    
?>