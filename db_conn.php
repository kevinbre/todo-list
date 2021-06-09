<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db = "to_do_list";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      
}catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}


?>