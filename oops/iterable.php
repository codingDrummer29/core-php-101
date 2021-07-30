<?php

// The iterable keyword can be used as a data type of a function argument or as the return type of a function

// Use an iterable function argument:
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

function getIterable():iterable {
    return ["a", "b", "c"];
}

$arr = ["a", "b", "c"];
printIterable($arr);
  
$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item;
}
?>