<?php

$fruits = ["Mango", "Banana", "Grape", "Lichi", "Jack-fruit"];

list($var1, $var2, $var3, $var4) = $fruits;

echo $var3 . "<hr>";

?>


<?php
    function retrieveUserProfile(){
        $user[] = "Saif Jahan";
        $user[] = "jahansaif@gmail.com";
        $user[] = "Bangla";
        return $user;
    }

    list($name, $email, $language) = retrieveUserProfile();
    echo "Name: {$name}<br> Email: {$email}<br> Language: {$language}<hr>";
?>


<?php
    function userProfile(){
        $user = ["Saif Jahan", "hossainjamil@gmail.com", "01555683"];
        return $user;
    }

    list ($name, $email, $phone) = userProfile();
    echo $name . "<br>" . $email . "<br>" . $phone;

?>