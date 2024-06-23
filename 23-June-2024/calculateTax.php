<?php
    function calculateTax($price, $tax){
        $total = $price + ($price * $tax);
        return $total;
    }

    echo calculateTax(10, 0.5);
    echo "<hr>";

?>

<?php
    function calTax($price, $tax=0.2){              // default value
        $total = $price + ($price * $tax);
        return $total;
    }

    echo calTax(10);

?>

