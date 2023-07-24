<?php

if($_POST){
    $txtName=$_POST['txtName'];
    $txtLastName=$_POST['txtLastName'];
    // input data
    echo " Hello ".$txtName." ".$txtLastName;
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

    <form action="exerciseFive.php" method="post">
        Name:
        <input type="text" name="txtName" id="">
        <br>
        Last Name:
        <input type="text" name="txtLastName" id="">
        <br>
        <input type="submit" value="Send">

    </form>
    
</body>
</html>