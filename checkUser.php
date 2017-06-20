<?php 
// 
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];

require_once "connect.php";
$statement = $DBH->prepare("SELECT * FROM users WHERE dbUsername=?");
$statement->bindparam(1, $formUsername);
$statement->execute();

$rows = $statement->fetchALL(PDO::FETCH_ASSOC);

if(empty($rows)){
    echo "Kan ikke finde bruger!";
    header( "Refresh:3; url=index.php");
} else{
    //Brugernavn gyldigt, nu testes PW.
    //Kør et loop der tester hver række om dbPassword matcher formPassword
    foreach($rows as $row){
        if($row['dbPassword'] == $formPassword){
            //Sørg for at brugeren er logget ind og har "tilladelser"
            session_start();
            // $_SESSION['email'] = 'line.line@gmail.com';
            $_SESSION['username'] = $formUsername;
            header("location: index.php");
        }
    }
    echo "Ikke korrekt password!";
    header("refresh:3; url=index.php");
}
$DBH = null;
?>