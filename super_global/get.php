<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobal - Get</title>
</head>
<body>
    
    <a href="get.php?subject=PHP&web=W3schools.com">Test $GET</a>
    
    <?php
        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>

    <!-- ignore the 1st warnings as this was to be in seperate files; link in one php in another -->

</body>
</html>