<?php 
echo "<pre>";

$arr=[1,2,4,5,7];
$associative_array=["Name"=>["Gautam","Rohit"],"Company"=>"UcodeSoft"];
$multidimension_array=["names"=>["gautam","rohit","kamal"],"Profession"=>["Employee","Employee","Employee"]];

print("INDEXED ARRAY KEYS\n");
print_r(array_keys($arr));

print("ASSOCIATIVE ARRAY KEYS\n");
print_r(array_keys($associative_array));

print("MULTIDEMSIONAL ARRAY KEYS\n");
print_r(array_keys($multidimension_array));

print("VALUES OF INDEXED ARRAY\n");
print_r(array_values($arr));

print("ASSOCIATIVE ARRAY VALUES\n");
print_r(array_values($associative_array));

print("MULTIDEMSIONAL ARRAY VALUES\n");
print_r(array_values($multidimension_array));

print("VALUES PUSHED IN INDEXED ARRAY\n");
array_push($arr,8,9,10,11);
print_r($arr);

print("VALUES PUSHED IN ASSOCIATIVE ARRAY\n");
array_push($associative_array,"Name","Raman");
print_r($associative_array);

print("VALUES POPPED FROM ASSOCIATIVE ARRAY\n");
array_pop($associative_array);
print_r($associative_array);

print("VALUES PUSHED TO MULTIDEMSIONAL ARRAY\n");
array_push($multidimension_array,["UCODESOFT"=>["1,2"]],["TELE"]);
print_r($multidimension_array);

print("VALUES POPPED FROM MULTIDEMNSIONAL ARRAY\n");
array_pop($multidimension_array);
print_r($multidimension_array);

$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
print_r($array);

// Empty string when using an empty array:
var_dump(implode('hello', [])); // string(0) ""

// The separator is optional:
var_dump(implode(['a', 'b', 'c']));// string(3) "abc"

$names=["gautam","rohit"];

var_dump(implode(",",$names));

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


?>