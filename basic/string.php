<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP String</title>
</head>
<body>

    <?php 

        $str  = "Hello World!";
        echo $str . "<br>";

        echo "<br>";
        echo "length: " . strlen($str); // op length: 12
        echo "<br>";
        echo "word count: " . str_word_count($str); // op word count: 2
        
        echo "<br>";
        echo "reverse: " . strrev($str); // op reverse: !dlroW olleH
        
        echo "<br>";
        $str2 = "World";
        echo "location of word : $str2 in $str is: " . strpos($str, $str2); 
        // op location of word : World in Hello World! is 6
        echo "<br>location of word : \"$str2\" in \"$str\" is: " . strpos($str, $str2); 
        // op location of word : "World" in "Hello World!" is: 6

        echo "<br>";
        $str3 = "Anubhab";
        echo "Replace : \"$str2\" with \"$str3\" in \"$str\" : " . str_replace($str2, $str3, $str);
        // op location of word : "World" in "Hello World!" is: 6

        /**
         * for more SOURCE: https://www.w3schools.com/php/php_ref_string.asp
         */

    ?>
    
</body>
</html>