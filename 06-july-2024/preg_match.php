<?php
    $line = "vim is the greatest word processor ever created! Oh vim, how I
    love thee!";
    if (preg_match("/\bVim\b/i", $line, $match)){       // preg_match_all ---> it will show all the ans
         print "Match found!";

        //  print_r($match);
    }
?>