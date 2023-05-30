<?php 

    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "crud";

    $Connectdb = new mysqli($dbServerName , $dbUserName, $dbPassword, $dbName );

    if (!$Connectdb){
        die(mysqli_error($Connectdb));
    }

?>