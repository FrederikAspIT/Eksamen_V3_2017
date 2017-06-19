<?php 

$host = "localhost";
$dbName = "blogDb";
$dbUsername = "root";
$dbPassword = "";

try{
    $DBH = new PDO("mysql:dbname=$dbName;host=$host;charset=utf8", $dbUsername, $dbPassword);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Noget gik galt!: <br>";
    echo $e->getMessage( );
}

?>