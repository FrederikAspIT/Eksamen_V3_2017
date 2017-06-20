<?php session_start(); ?>
<?php  
// Gemmer GET værdierne der er blevet sendt til databasen fra formularen i variable
$heading = $_GET['heading'];
$imgSrc = $_GET['imgSrc'];
$imgAlt = $_GET['imgAlt'];
$articleText = $_GET['articleText'];
$time = date("Y-m-d");
// Henter brugernavn ned fra session
$articleAuthor = $_SESSION['username'];

// Skaber bro til DB, og med SQL fortæller hvilke felter der skal indsættes i, i tabellen articles
require_once "connect.php";
$statement = $DBH->prepare("INSERT INTO articles (imgSrc, imgAlt, heading, time, articleText, articleAuthor) values(?, ?, ?, ?, ?, ?) ");
// Med bindParam tager den værdien fra imgSrc, og smider ind i den første placeholder
// Sådan fortsætter det ned ad med resten af værdierne
$statement->bindParam(1, $imgSrc);
$statement->bindParam(2, $imgAlt);
$statement->bindParam(3, $heading);
$statement->bindParam(4, $time);
$statement->bindParam(5, $articleText);
$statement->bindParam(6, $articleAuthor);
// Med execute udfører den det ovenstående kode
$statement->execute();
// Sender brugeren tilbage til forsiden
header ("location: index.php");
?>