<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "school_mgmt";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);




?>
