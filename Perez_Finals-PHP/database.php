<?php
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "finals_db";

    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

    if($con){
    //      echo "connection successful";
    // }else{
    //      echo "db connected unsuccessful";
    }
?>