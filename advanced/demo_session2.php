<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php

        // Echo session variables that were set on previous page
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br/>";

        // or
        print_r($_SESSION);
        echo "<br />";

        /**
         * on url
         * http://localhost:3000/advanced/demo_session2.php
         * op
         * Favorite color is green.
         * Favorite animal is cat.
         * Array ( [favcolor] => green [favanimal] => cat )
         */

        // modify session value
        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);
        
    ?>

</body>
</html>