
<?php

$a=[10,-1,3,-10,5,-6];

for($i=0;$i<count($a)-1;$i++)
{
    if($a[$i]>$a[$i+1])
    {
      $a[$i]=$a[$i]+$a[$i+1];
        $a[$i+1]=$a[$i]-$a[$i+1];
        $a[$i]=$a[$i]-$a[$i+1];
        $i=-1;
    }

}
print_r($a);
// echo "<pre>";

// $input_array = array('a', 'b', 'c', 'd', 'e');


// print_r(array_reverse($input_array));


?>