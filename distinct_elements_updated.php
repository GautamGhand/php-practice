<?php

function unique($a)
{
    $b=[];
    $c=[];
    $d=[];
for($i=0;$i<count($a);$i++)
{
    for($j=$i;$j<count($a)-1;$j++)
    {
    if($a[$i]==$a[$j+1])
    {
        array_push($b,$a[$i]);
    }
    } 
}
$c=array_diff($a,$b);
$d=array_merge($b,$c);
sort($d);
return $d;
}

$arr=[1,3,1,5,7,67,89,67,99,0,99,100];

print_r(array_unique($arr));
echo "<pre>";
print_r(unique($arr));


?>