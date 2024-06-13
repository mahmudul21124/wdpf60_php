<?php
    define("ABC", "Alphabet");              // define() can't be redefined

    echo ABC;
    echo "<br>";

    define("USR", "Admin");
    define("PASS", 123456789);

    echo "<b>User: </b>" . USR . "<br>" . "<b>Password: </b>" . PASS;
    echo "<hr>";

    const PI = "Saif Jahan";                // const & define() are same thing

    echo PI;
    




?>