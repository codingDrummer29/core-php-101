<!DOCTYPE html>

<?php

    // setcookie(name, value, expire, path, domain, secure, httponly);
    $cookie_name = "user";
    $cookie_value = "Anubhab";
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

    // set the expiration date to 12 hour ago
    setcookie("user", "", time() - 3600*12);

    // check if enabled
    setcookie("test_cookie", "test", time() + 3600, '/');

    // we can create/update cokkie with same command-syntax with diff. values

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Practice</title>
</head>
<body>
    
    <?php 
    
        // create/modify
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }

        // del
        echo "Cookie 'user' is deleted.";

        // check if enabled
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
        // SOURCE: https://www.w3schools.com/php/php_ref_network.asp
    ?>

</body>
</html>