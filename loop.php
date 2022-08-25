<?php 

$arr=[
1,
2,
3,
"5"=>"hi",
[
    1=>[
        "id"=>"1",
        "title"=>"t1"
    ],
    [
        
        "id"=>"2",
        "title"=>"t2"
    ]

]    

];

echo "<pre>";
print_r($arr);

foreach($arr as $keys=>$values)
{
    if(is_array($values))
    {
        foreach($values as $key=>$val)
        {
            echo $val["id"];
            echo $val["title"]; 
        }
    }
}

// echo $arr[5];






?>