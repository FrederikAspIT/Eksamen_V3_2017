<?php 

// Opretter variabler
$host = "localhost";
$dbName = "blogDb";
$dbUsername = "root";
$dbPassword = "";


try{
    // Opretter forbindelse til MySQL databasen 
    // og angiver DB navn, host, username, kodeord osv.
    $DBH = new PDO("mysql:dbname=$dbName;host=$host;charset=utf8", $dbUsername, $dbPassword);
    
    // Hvis fejl skulle opstå, bliver det udskrevet ved brug af PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   // Hvis der opstår fejl i try, så gemmer den fejlen som $e, og udskriver en fejlbesked 
} catch(PDOException $e){
    echo "Noget gik galt!: <br>";
    echo $e->getMessage( );
}

?>