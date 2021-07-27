<!DOCTYPE html>
<html lang="en">
<head>
    <title>Static Variable</title>
</head>
<body>
    
    <?php 
    
        /**
         * Normally, when a function is completed/executed, all of its variables are deleted. 
         * However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
         * Hence, static keyword is used.
         */

        function test(){
            static $x = 0;
            echo $x . "<br/>";
            $x++;
        }

        test(); // 0
        test(); // 1
        test(); // 2

    ?>

</body>
</html>