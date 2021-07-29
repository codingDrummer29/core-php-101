<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Exercise</title>
</head>
<body>
    
    <?php 
     
        $str = "Hello There!9u8nh wqh   0-9 3   ]"; 
        echo $str . "<br />";
        $fstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo "Filter : " . $str . "<br />";

        $int = 100; 
        // $int = 0;
        echo $int . "<br />";
        // if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        if (
            filter_var($int, FILTER_VALIDATE_INT) === 0 || 
            !filter_var($int, FILTER_VALIDATE_INT) === false
        ) {
            echo("Integer is valid");
        } else {
            echo("Integer is not valid");
        }
        echo "<br />";
        // echo filter_var($int, FILTER_VALIDATE_INT);

        $ip = "127.0.0.1";
        if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
            echo("$ip is a valid IP address");
        } else {
            echo("$ip is not a valid IP address");
        }

        echo "<br />";

        $email = "john.doe@example.com@here";
        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo("$email is a valid email address");
        } else {
            echo("$email is not a valid email address");
        }

        echo "<br />";

        $url = "https://www.helloworld.com@?";
        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);
        // Validate url
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
            echo("$url is a valid URL");
        } else {
            echo("$url is not a valid URL");
        }

    ?>

</body>
</html>