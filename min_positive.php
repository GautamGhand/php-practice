<?php

$arr=[-3,2,-6,5,8,3,4,1];

$min=1;

sort($arr);

for($i=0;$i<=7;$i++)
{
    if($arr[$i]==$min)
    {
        $min++;
        continue;
    }
    else
    {
        if($arr[$i]>0)
        {
            echo $min;
            break;
        }
    }
}




?>