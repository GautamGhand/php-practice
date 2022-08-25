<?php 

function marks($marks)
{
    switch($marks)
    {
        case $marks>=60:
            echo "First Division"."<br>";
            break;
         case $marks>=45 && $marks<=59:
            echo "Second Division"."<br>";
            break;
         case $marks>=33 && $marks<=44:
            echo "Third Division"."<br>";
            break;
         default:
            echo "Fail";
    }
}

marks(47);
marks(62);
marks(35);
marks(22);



?>