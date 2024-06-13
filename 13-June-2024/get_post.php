<!-- GET Method -->

<h3>Get Method</h3>
<a href="get_post.php?Name=Mahmudul Haque&ID=1282769&Address=Narayanganj&Email=mahmudul21124@gmail.com">Click here to add informaiton</a><br>

<?php
    // // ini_set("display_errors", 0);           // turns off display error
    // echo "<pre>";
    // // print_r($_GET);
    // // print_r($_POST);
    // echo "</pre>";

    // echo $_POST['email'];
    // echo "<br>";
    // echo $_POST['pswd'];
    // echo "<hr>";
?>

<?php
    if(isset($_REQUEST["subscribe"])){              // If we use $_REQUEST then $_GET or $_POST both will work, I don't don't have to write manually $_GET or $_POST.
        echo "<b> Email: </b>" . $_REQUEST['email'];
        echo "<br>";
        echo "<b> Password: </b>" . $_REQUEST['pswd'];
        echo "<hr>";
    }
      
?>
<!-- Post Method -->
 
<h3>Post Method</h3>
<form action="" method="post">       <!-- If method is post then it will be post method -->

Email address:<br />
<input type="text" name="email" /><br>

Password:<br />
<input type="password" name="pswd"/><br>

<input type="submit" name="subscribe" value="Subscribe!" />

</form>