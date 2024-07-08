<?php
    var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
    var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
    echo "<hr>";
?>



<?php
    // Variable to check
    $email = "john.doe@example.com";

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }
?>