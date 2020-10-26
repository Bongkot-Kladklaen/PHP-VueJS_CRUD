<?php 
    require_once "config.php";
    $hostname = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $database = DB_NAME;

    $conn = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);

    if(!$conn){
        echo "Error";
    }
    
?>