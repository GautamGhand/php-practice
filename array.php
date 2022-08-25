<?php 

$arr=[1,2,3,4,5];
$i=0;

for($i=0;$i<=4;$i++)
{
    echo $arr[$i]."<br>";
}

$associate_array=["Name"=>"gautam","Company"=>"Ucode"];

echo print_r($associate_array)."<br>";


$multi_array=["name"=>array(1,2,3)];



print_r($multi_array);





?>