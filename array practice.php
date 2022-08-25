<?php 

$arr=[
"Country"=>"India",
"Capital"=>"New Delhi",
0=>['id'=>1,'title'=>'t1'],
1=>['id'=>2,'title'=>'t2']

];

// for($i=0;$i<=1;$i++)
// {
//     echo "The Capital of ".$arr["Country"][$i]." is ".$arr["Capital"][$i]."<br>";
// }

foreach($arr as $value)
{
    if(is_array($value))
    {
        echo "id is ".$value['id']." title is ".$value['title']."<br>";
    }
    else
    {
        echo $value."<br>";
    }
}




?>