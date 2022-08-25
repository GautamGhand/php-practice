<?php

$arr=["India"=>"New Delhi","Dubai"=>"Uman","Canada"=>"ontario"];


$arr2=[
    0=>['id'=>['name'=>'gautam'],'title'=>'T1'],
    1=>['id'=>['name'=>'rohit'],'title'=>'T2']
];

// $arr3=[
//     "Country"=>["India","Dubai"],
//     "Capital"=>["New Delhi","Oman"]
// ];


// foreach($arr3 as $keys=>$values)
// {
//     foreach($values as $names)
//     {
//         echo $names."<br>";
//     }
// }

foreach($arr as $keys=>$elements)
{
    echo $keys." Capital is ".$elements."<br>";
}


// echo $arr2[0]["id"];

foreach($arr2 as $keys=>$elements)
{   
        echo $elements['id']['name'];

}


echo "hello world";



?>