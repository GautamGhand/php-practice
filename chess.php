<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
echo "<table>";
for($i=1;$i<=8;$i++)
{
    echo "<tr>";
    for($j=1;$j<=8;$j++)
    {
        $a=$i+$j;
        if($a%2==0)
        {
            echo "<td style=\"background-color:black;height:80px;width:80px;border:2px solid black\">";
        }
        else
        {
            echo "<td style=\"background-color:white;height:80px;width:80px;border:2px solid black\">";
        }
       
    }
    echo "</tr>";
}
echo "</table>";

?>

</table>
</body>
</html>