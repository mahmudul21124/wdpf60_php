<?php

$date = "22 June 2024";
$text = "Today is first class after Eid";
$web = "https://www.w3schools.com/";

$output = <<<ABDULLAH
<h1>Text: $text</h1>
<p>$date</p>
<a href="$web">Click Here</a>


ABDULLAH;

echo $output;
?>