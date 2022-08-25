
<?php

function positive_numbers($n)
{   
return $n>0;
}
$min=1;

function check($p){
global $min;

if($p==$min)
{
    $min++;
}
else{
       return $min;
}
}

$a=[3,2,1,5,-1,6,-3,-4,0];

$positive=array_filter($a,'positive_numbers');
sort($positive);

$c=array_map('check',$positive);
print_r($c);

$d=array_filter($c,'positive_numbers');
echo $d[key($d)];


?>