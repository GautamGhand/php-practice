<?php
$a=["l","i","t","s","e","n"];
$b=["s","i","l","e","n","t","e"];
$temp=0;
if(count($a)!=count($b))
{
    echo"false";
    exit();
}
else
{
    for($i=0;$i<count($a);$i++)
    {
        for($j=0;$j<count($a);$j++)
        {
            if($a[$i]==$b[$j])
            {
                $temp++;
                break;
                
            }
        }
    }
}
echo ($temp==count($a))?"true":"false";
?>