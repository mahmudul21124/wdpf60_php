<!DOCTYPE html>
<html>
    <head>
        <title>Country Sorting</title>
    </head>
    <body>
        <h1>Country & Capital where country wise sorting</h1>

        <?php

            $countries = [
                "Bangladesh" => "Dhaka",
                "Srilanka" => "Colombo",
                "Uganda" => "Kampala",
                "China" => "Beijing",
                "Hungery" => "Budapest",
                "Japan" => "Tokoyo"
            ];
            echo "<b>Before Sorting</b><br><br>";

            foreach ($countries as $country => $capital) {
                echo "$country: $capital <br>";
            }
            echo "<hr>";
            
            echo "<b>After Sorting</b><br><br>";

            ksort($countries);

            foreach ($countries as $country => $capital) {
                echo "$country: $capital <br>";
            }
            
            // echo "<pre>";
            // print_r($countries);

        ?>

    </body>
</html>