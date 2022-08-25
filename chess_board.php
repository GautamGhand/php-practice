<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    tr
    {
        border:2px solid black;
    }
    table 
    {
        border:2px solid black;
    }
        </style>
</head>

<body>
    <table>
   <?php 
    for($i=1;$i<=8;$i++)
    {
        echo "<tr>";
        if($i%2==0)
        {

        for($j=1;$j<=8;$j++)
        {
            if($j%2==0)
            {
                echo "<td style=\"background-color:black;height:80px;width:80px;\">";
            }
            else
                {
                    echo "<td style=\"background-color:white;height:80px;width:80px;\">";
                }
        }
        }
        else 
        {
            for($j=1;$j<=8;$j++)
        {
            if($j%2==0)
            {
                echo "<td style=\"background-color:white;height:80px;width:80px;\">";
            }
            else
                {
                    echo "<td style=\"background-color:black;height:80px;width:80px;\">";
                }
        }
            }
        echo "</tr>";
    }

   ?>
    </table>
</body>
</html>
<?php 




















?>