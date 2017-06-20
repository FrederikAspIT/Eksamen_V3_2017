<?php 
// Bro til Databasen
require_once "connect.php";

// Henter alt indhold fra articles tabellen, og udfører det nedenunder 
$statement = $DBH->prepare("SELECT * FROM articles");
$statement->execute();

// Med "PDO::FETCH_ASSOC" bliver tabellens værdier hentet ud som et associativt array
// while loop'et bliver ved med at hente artikler, indtil der ikke er flere 
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article class="col-md-12">
        <h3 class="col-md-12 col-md-offset-1" style="text-transform: uppercase; font-size:20px;"><?php echo $row['heading'] ?></h3>
        <img src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>" class="img-responsive col-md-12 col-md-offset-1">
        <h5 class="col-md-12 col-md-offset-1" style="text-transform: uppercase; font-size: 12px;"><span style="color: #ccc;">Skrevet af</span> <?php echo $row['articleAuthor'] ?><span style="color: #ccc;">, den </span><?php echo $row['time'] ?></h5>
        <p class="col-md-12 col-md-offset-1" style="font-size: 12px;"><?php echo $row['articleText'] ?></p>
        <hr>
    </article>
<?php    
}
?>