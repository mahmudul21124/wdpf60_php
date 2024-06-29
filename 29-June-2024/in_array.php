<?php

    // $state = "Ohio";
    $state = "New Jursey";
    $states = ["California", "Hawaii", "Ohio", "New York"];

    if(in_array($state, $states))               // If the output of "if/else" is one liner then {} is not mendatory.
        echo "Not to worry, $state is smoke-free!";

    else
        echo "Not found";

?>