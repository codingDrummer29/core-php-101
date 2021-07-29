<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Exercise</title>
    <!-- SOURCE: https://www.w3schools.com/php/php_json.asp -->
</head>
<body>
    
    <?php 
    
        // json_encode() - SETTING VALUES

        // indexed arrays
        $cars = array("Volvo", "BMW", "Toyota");
        echo json_encode($cars) . "<br />"; // op ["Volvo","BMW","Toyota"]

        // associative array
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        echo json_encode($age) . "<br />"; // op {"Peter":35,"Ben":37,"Joe":43}
        
        echo "<br /><br />";

        // json_decode() - objectClass - GETTING VALUES
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj));
        // op object(stdClass)#1 (3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(43) }
        echo "<br />";
        /**
         * The json_decode() function returns an object by default. 
         * The json_decode() function has a second parameter, and when set to true, JSON objects 
         * are decoded into associative arrays.
         */

        //  json_decode() - associative
        var_dump(json_decode($jsonobj, true));
        // op array(3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(43) }

        echo "<br /><br />";

        // accessing decoded values 
        // in a PHP object
        $obj = json_decode($jsonobj);
        echo $obj->Peter . "<br />";
        echo $obj->Ben . "<br />";
        echo $obj->Joe . "<br />";
        echo "Via loop through :<br />";
        foreach($obj as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }

        echo "<br />";

        // as associative array
        $arr = json_decode($jsonobj, true);
        echo $arr["Peter"] . "<br />";
        echo $arr["Ben"] . "<br />";
        echo $arr["Joe"] . "<br />";
        echo "Via loop through :<br />";
        foreach($arr as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    
    ?>

</body>
</html>