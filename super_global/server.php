<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobal - Server</title>
</head>
<body>
    
    <?php 

        // SOURCE: https://www.w3schools.com/php/php_superglobals_server.asp
        echo $_SERVER['PHP_SELF'];
        echo "<br>"; // op /super_global/server.php
        echo $_SERVER['SERVER_NAME'];
        echo "<br>"; // op localhost
        echo $_SERVER['HTTP_HOST'];
        echo "<br>"; // op localhost:3000
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>"; 
        // op Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>"; // op /super_global/server.php
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>"; // op GET
        echo $_SERVER['SERVER_PROTOCOL'];
        echo "<br>"; // op HTTP/1.1
        echo $_SERVER['SERVER_SOFTWARE'];
        echo "<br>"; // op PHP 8.0.8 Development Server

    ?>

</body>
</html>