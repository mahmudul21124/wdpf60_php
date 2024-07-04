<?php
       $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
        "California", "Colorado", "Connecticut");
        $subset = array_slice($states, 4);
        $subset2 = array_slice($states, 4, 2);  // (index, length)
        $subset3 = array_slice($states, 1, -3);  // (index, minus)

        echo "<pre>";
        print_r($states);

        print_r($subset);
        print_r($subset2);
        print_r($subset3);

?>