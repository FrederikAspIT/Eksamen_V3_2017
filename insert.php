<?php session_start(); ?>
<?php 
$heading = $_GET['heading'];
$imgSrc = $_GET['imgSrc'];
$imgAlt = $_GET['imgAlt'];
$articleText = $_GET['articleText'];
$time = date("Y-m-d");
$articleAuthor = $_SESSION['username'];

require_once "connect.php";
$statement = $DBH->prepare("INSERT INTO articles (imgSrc, imgAlt, heading, time, articleText, articleAuthor) values(?, ?, ?, ?, ?, ?) ");
$statement->bindParam(1, $imgSrc);
$statement->bindParam(2, $imgAlt);
$statement->bindParam(3, $heading);
$statement->bindParam(4, $time);
$statement->bindParam(5, $articleText);
$statement->bindParam(6, $articleAuthor);
$statement->execute();

header ("location: index.php");
?>