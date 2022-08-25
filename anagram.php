<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
    <form method="POST" action="">
        <label>FIRST TEXT</label>
        <input type="text" name="ft"><br>
        <label>SECOND TEXT</label>
        <input type="text" name="st"><br>
        <input type="submit" value="SUBMIT" name="submit">
    </form>
    <?php
    $ft = $_POST['ft'];
    $st = $_POST['st'];

    $f = str_split($ft);
    $s = str_split($st);
    $count = 0;
    if (count($f) == count($s)) {
        sort($f);
        sort($s);
        for ($i = 0; $i < count($s); $i++) {
            if ($f[$i] == $s[$i]) {
                $count = $count + 1;
            }
        }
    }

    if ($count == count($s)) {
        echo $ft;
    } else {
        echo "Not Anagram";
 
