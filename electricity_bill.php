<?php

function calculate_bill($units)
{
if($units<=50)
{
    $bill=3.50*$units;
}
elseif($units>50 && $units<=150)
{
    $new_units=$units-50;
    $bill=3.50*50+$new_units*4.00;
}
elseif($units>150 && $units<=250)
{
    $new_units=$units-150;
    $bill=50*3.50+4.00*100+$new_units*5.20;
}
else
{
    $new_units=$units-250;
    $bill=3.50*50+4.00*100+5.20*100+6.50*$new_units;
}
return $bill;
}




$result=calculate_bill(166);

echo " The Total Bill Is ".$result;


?>