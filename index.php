<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wilderness | V3 Eksamen</title>

    <!-- Bootstrap, css og font-awesome -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
      
      <div class="container-fluid">
        <div class="container">
            <img src="img/header_img.jpg" alt="logo" class="img-responsive">
            <!-- Navigation -->
            <nav class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar" style="background-color:#ccc;"></span>
                        <span class="icon-bar" style="background-color:#ccc;"></span>
                        <span class="icon-bar" style="background-color:#ccc;"></span>                        
                    </button>
                </div>
                <div class="row collapse navbar-collapse" id="myNavbar">
                    <ul>
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="#">Planter</a></li>
                        <li><a href="#">Indretning</a></li>
                        <li style="float:right"><a href="logInd.php">Log Ind</a></li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <!-- Sidebar -->
                <aside class="col-md-3 row">
                    <div class="col-sm-12">
                        <img src="img/frk_overspringshandling.jpg" alt="bio_pic" class="img-responsive">
                    </div>
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestias vel, at debitis, voluptate consequatur omnis asperiores sed nihil voluptatem ipsam, eligendi ducimus eius amet totam facere natus ex veniam.</p>
                        <hr>
                        <ul class="col-sm-12">
                            <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </aside>
                <!-- Articles and formular-->
                <main class="col-md-9">
                    
                    
                    <!-- Formular her -->
                    <article class="col-md-12">
                        <form action="insert.php" method="get" class="form-horizontal">
                            <div class="form-group col-md-12">
                                <label for="heading" class="col-md-12 col-md-offset-1" style="font-size:12px; color:#333333;"><b>Titel</b></label>
                                <div class="">
                                    <input class="form-control col-md-12 col-md-offset-1" id="heading" type="text" name="heading" placeholder="Titel på dit indlæg" style="border-radius:2px;">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="imgSrc" class="col-md-12 col-md-offset-1" style="font-size:12px; color:#333333;"><b>Billede navn</b></label>
                                <div class="">
                                    <input class="form-control col-md-12 col-md-offset-1" id="imgSrc" type="text" name="imgSrc" placeholder="Navn på billede uden .jpg" style="border-radius:2px;">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="imgAlt" class="col-md-12 col-md-offset-1" style="font-size:12px; color:#333333;"><b>Billede alt tekst</b></label>
                                <div class="">
                                    <input class="form-control col-md-12 col-md-offset-1" id="imgAlt" type="text" name="imgAlt" placeholder="Billedets alt tekst" style="border-radius:2px;">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="articleText" class="col-md-12 col-md-offset-1" style="font-size:12px; color:#333333;"><b>Indlægets tekst</b></label>
                                <div class="">
                                    <input class="form-control col-md-12 col-md-offset-1" id="articleText" type="text" name="articleText" placeholder="Indlægets tekst" style="min-height:100px; padding-bottom:70px; border-radius:2px;">
                                </div>
                            </div>
                            <input type="submit" value="Udgiv indlæg" class=" btn btn-default bt-default btn-large  col-md-offset-1" style="border-radius:2px;">
                        </form>
                    </article>
                    
                    <!-- Artikel her -->
                    <?php include "fetchDb.php"; ?>
                    
                    
                    <!--<article class="col-md-12">
                        <h3 class="col-md-12 col-md-offset-1" style="text-transform: uppercase; font-size:20px;">Vores nye lænestol i egetræ og kernelæder</h3>
                        <img src="img/laenestol.jpg" alt="Lænestol" class="img-responsive col-md-12 col-md-offset-1">
                        <h5 class="col-md-12 col-md-offset-1" style="text-transform: uppercase; font-size: 12px;"><span style="color: #ccc;">Skrevet af</span> Line<span style="color: #ccc;">, den </span>24. August, 2017</h5>
                        <p class="col-md-12 col-md-offset-1" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestias vel, at debitis, voluptate consequatur omnis asperiores sed nihil voluptatem ipsam?</p>
                        <hr>
                    </article>
                    <article class="col-md-12">
                        <h3 class="col-md-12 col-md-offset-1" style="text-transform: uppercase; font-size:20px;">Mit plante eksperiment</h3>
                        <img src="img/mit_plante_eksperiment.jpg" alt="Potteplante" class="img-responsive col-md-12 col-md-offset-1">
                        <h5 class="col-md-12 col-md-offset-1" style="text-transform: uppercase; font-size: 12px;"><span style="color: #ccc;">Skrevet af</span> Line<span style="color: #ccc;">, den </span>1. Oktober, 2017</h5>
                        <p class="col-md-12 col-md-offset-1" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestias vel, at debitis, voluptate consequatur omnis asperiores sed nihil voluptatem ipsam?</p>
                        <hr>
                    </article>-->
                    
                    
                    
                </main>
            </div>
            <hr>
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                       <p style="text-align:center; text-transform:uppercase;">&copy; 2017 - Wilderness</p>
                    </div>
                </div>
            </footer>
          </div><!-- /.container -->
      </div><!-- /.container-fluid -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>