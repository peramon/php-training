<?php
    // Method POST
    if($_POST){
        // Recive information from html form
        $name=$_POST['txtName'];
        echo "Hi ".$name;
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
    <!-- Send information to php post -->
    <form action="exerciseTwo.php" method="post">
        <input type="text" name="txtName" id="">
        <input type="submit" value="Send">
    </form>

</body>
</html>