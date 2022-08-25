<?php 

$float_num = 10.9;
$int_num= (int) $float_num;
$double_num=(double) $float_num;
$string_num=(string) $float_num;
$bool_num=(boolean) $float_num;

echo var_dump($int_num)."<br>";
echo var_dump($double_num)."<br>";
echo var_dump($string_num)."<br>";
echo var_dump($bool_num);

?>