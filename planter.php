<?php session_start(); ?>
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
            
            <!-- Tjekker om bruger er logget ind, hvis ja, så skriv "Hej <bruger>" samt log ud knap -->
            <?php
                if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>
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
                                <li style="float:right"><a href="logout.php?logout=true">Hej <?php echo $_SESSION['username']; ?>, log ud</a></li>
                            </ul>
                        </div>
                    </nav>
                 <?php
                } else{
            ?>
            <!-- Hvis bruger ikke er logget ind vises nedenstående -->
            <!-- Navigation og login-->
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
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active" href="#">Planter</a></li>
                        <li><a href="#">Indretning</a></li>
                        <li style="float:right"><a href="logInd.php">Log Ind</a></li>
                    </ul>
                </div>
            </nav>
            <?php
            }
            ?>
            
            
                
                    
                    
          
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