<?php

    $conn = mysqli_connect("localhost", "root", "", "mufam");

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    };

?>