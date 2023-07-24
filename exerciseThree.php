<?php

    // Receive information
    // Method GET
    // GET -> Sending by URL
    if($_GET){
        $name=$_GET['name'];
        echo " Hello ".$name;
    }

?>