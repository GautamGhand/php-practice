<?php





$a=[1,2,3,4,0,null,null,3,null];

$numbers=array_filter($a,function($values)
{
    return $values;
});



print_r($numbers);


// foreach($a as $keys=>$values)
// {
//     for($i=0;$i<2;$i++)
//     {
//         echo $values[$i];
//     }
// }

// array_push($a['India'],"Ludhiana");


// print_r($a);





?>