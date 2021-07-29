<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo_Session 1</title>
</head>
<body>
    
    <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";

        echo "Session variables are set.";

        /**
         * on url
         * http://localhost:3000/advanced/demo_session1.php
         * op
         * Session variables are set.
         */

    ?>

</body>
</html>