<?php
        $a = setcookie("test_cookie1", "value1", time()+86400, "/");
        $b = setcookie("test_cookie2", "value2", time()+86400, "/");
?>

<html>
    <head>
        <title>PHP Cookies 1</title>
    </head>
    <body>
        
    <?php
        foreach ($_COOKIE as $key => $value) {
            echo $key.": ".$value."<br>";
        }
    ?>

        <br>
        <button><a href="delete_cookie.php">Delete Cookie</a></button>

    </body>
</html>