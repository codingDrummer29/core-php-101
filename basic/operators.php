<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>
<body>
    
<?php 

$x = 5;
$y = 3;

// arithmetic
echo $x + $y . "<br>"; // op 8
echo $x - $y . "<br>"; // op 2
echo $x * $y . "<br>"; // op 15
echo $x / $y . "<br>"; // op 1.6666667
echo $x % $y . "<br>"; // op 2
echo $x ** $y . "<br>"; // op 125

// assignment

echo $z = $y ; echo "<br>"; // op 3
echo $z += 2 ; echo "<br>"; // op 5
echo $z -= 2 ; echo "<br>"; // op 3
echo $z *= 2 ; echo "<br>"; // op 6
echo $z /= 2 ; echo "<br>"; // op 3
echo $z %= 2 ; echo "<br>"; // op 1

// comparison
$x = 5;
$y = 3;
var_dump($x == $y); echo "<br>"; // op bool(false)
// Returns true if $x is equal to $y, and they are of the same type
var_dump($x === $y); echo "<br>"; // op bool(false) 
var_dump($x != $y); echo "<br>"; // op bool(ture)
// Returns true if $x is not equal to $y
var_dump($x <> $y); echo "<br>"; // op bool(true)
// Returns true if $x is not equal to $y, or they are not of the same type
var_dump($x !== $y); echo "<br>"; // op bool(true)
/**
 * Spaceship
 * Returns an integer less than, equal to, or greater than zero, 
 * depending on if $x is less than, equal to, or greater than $y. 
 * Introduced in PHP 7.
 */
$x = 5;  
$y = 10;
echo ($x <=> $y); echo "<br>"; // returns -1 because $x is less than $y

$x = 10;  
$y = 10;
echo ($x <=> $y); echo "<br>"; // returns 0 because values are equal

$x = 15;  
$y = 10;
echo ($x <=> $y); echo "<br>"; // returns +1 because $x is greater than $y

// increment-decrement operator
$x = 3;
echo $x; echo "<br>"; // 3
echo ++$x; echo "<br>"; // Increments $x by one, then returns $x op 4
echo $x++; echo "<br>"; // Returns $x, then increments $x by one op 4
echo $x; echo "<br>"; // 5
echo --$x; echo "<br>"; // Increments $x by one, then returns $x op 4
echo $x--; echo "<br>"; // Returns $x, then increments $x by one op 4
echo $x; echo "<br>"; // 3

// conditional operators
$x = 100;  
$y = 50;
// if ($x == 100 and $y == 50) {
if ($x == 100 && $y == 50) {
    echo "Hello world!"; echo "<br>"; // op Hello world!
}
// if ($x == 100 or $y == 5) {
if ($x == 100 || $y == 5) {
    echo "Hello world!"; echo "<br>"; // op Hello world!
}
if ($x == 100 xor $y == 5) { // True if either $x or $y is true, but not both
    echo "Hello world!"; echo "<br>"; // op Hello world!
}
if ($y !== 5) { // True if either $x or $y is true, but not both
    echo "Hello world!"; echo "<br>"; // op Hello world!
}

// string operators
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2; echo "<br>"; // op Hello world!
$txt1 .= $txt2;
echo $txt1; echo "<br>"; // op Hello world!

// operators
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow"); 
// union of $x and $y  
print_r($x + $y); echo "<br>"; // op Array ( [a] => red [b] => green [c] => blue [d] => yellow )
// equality
var_dump($x == $y); echo "<br>"; // op bool(false)
// identity
var_dump($x === $y); echo "<br>"; // op bool(false)
// inequality
var_dump($x != $y); echo "<br>"; // op bool(true) or,
// returns true if $x is not equal to &y
var_dump($x <> $y); echo "<br>"; // op bool(true)
// non identity
var_dump($x !== $y); echo "<br>"; // op bool(true)

// conditional assignment operator
// 1. ternary
// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in"; // op anonymous
echo("<br>");
$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in"; // op logged in
echo("<br>");
// 2. Null coalescing
/**
 * Returns the value of $x.
 * The value of $x is expr1 if expr1 exists, and is not NULL.
 * If expr1 does not exist, or is NULL, the value of $x is expr2.
 * Introduced in PHP 7
 */
// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous"; // op anonymous
echo("<br>");

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red"; // op red

?>

</body>
</html>