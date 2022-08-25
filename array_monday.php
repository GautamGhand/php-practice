<?php
$array1 = array("color" => "red", 2, 4);

$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

echo "<pre>";


$result = array_push($array1, $array2);


print_r ($array1);


$array11 = array("a" => "green", "red", "blue", "red");
$array22 = array("b" => "green", "yellow", "red");
$result1 = array_diff($array22, $array11);

$pizza  = ",";
$pieces = explode(",", $pizza);
print_r($pieces);
var_dump($pieces);

print_r($result1);

?>