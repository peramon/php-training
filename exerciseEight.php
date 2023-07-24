<?php

if($_POST){
    $valA=$_POST['valA'];
    $valB=$_POST['valB'];

    $sum = $valA + $valB;
    $subtract = $valA - $valB;
    $multiply = $valA * $valB;
    $division = $valA / $valB;
 
    echo "Sum -> ".$sum."<br>";
    echo "Subtract -> ".$subtract."<br>";
    echo "Multiply -> ".$multiply."<br>";
    echo "Division -> ".$division."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerciseEight.php" method="post">
        Value A:
        <input type="text"name="valA">
        <br>
        Value B:
        <input type="text"name="valB">
        <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>