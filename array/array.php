<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Array Functios</title>
</head>
<body>
    
<?php 

    // create an array
    $cars = array("Volvo", "BMW", "Toyota");
    // print
    echo $cars; echo "<br>"; // op Array
    print_r($cars); echo "<br>"; // op Array ( [0] => Volvo [1] => BMW [2] => Toyota )
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; echo "<br>";
    // op I like Volvo, BMW and Toyota.
    echo count($cars); echo "<br>"; // op 3

    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    print_r(array_change_key_case($age,CASE_UPPER)); print("<br>");
    // op Array ( [PETER] => 35 [BEN] => 37 [JOE] => 43 )

    // array_chunk(array, size, preserve_key);
    $car=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
    print_r(array_chunk($car,2)); echo "<br>";
    /**
     * Array ( 
     *      [0] => Array ( [0] => Volvo [1] => BMW ) 
     *      [1] => Array ( [0] => Toyota [1] => Honda ) 
     *      [2] => Array ( [0] => Mercedes [1] => Opel ) 
     * )
     */
    
    // array_fill(starting_index, no_of_entries, value);
    $a1=array_fill(3,4,"blue");
    $b1=array_fill(0,1,"red");
    print_r($a1); echo "<br>"; // op Array ( [3] => blue [4] => blue [5] => blue [6] => blue )
    print_r($b1); echo "<br>"; // op Array ( [0] => red )

    // An array that represents a possible record set returned from a database
    $a = array(
        array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
        ),
        array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
        ),
        array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
        )
    );
    
    $last_names = array_column($a, 'last_name');
    print_r($last_names); echo "<br>";
    //  op Array ( [0] => Griffin [1] => Smith [2] => Doe )

    // array_map(func_name, array_name)
    function myfunction($num)
    {
        return($num*$num);
    }
    $am=array(1,2,3,4,5);
    print_r(array_map("myfunction",$am)); echo "<br>";
    // op Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

    // array_walk()
    function myfunc($value,$key)
    {
        echo "The key $key has the value $value<br>";
    }
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    array_walk($a,"myfunc");
    /**
     * op
     * The key a has the value red
     * The key b has the value green
     * The key c has the value blue 
    */ 

    // SOURCE: https://www.w3schools.com/php/php_ref_array.asp

?>

</body>
</html>