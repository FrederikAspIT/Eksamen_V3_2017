<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log ind | V3 Eksamen</title>

    <!-- Bootstrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/logInd.css">

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Planter</a></li>
                        <li><a href="#">Indretning</a></li>
                        <li class="active" style="float:right"><a href="logInd.php">Log Ind</a></li>
                    </ul>
                </div>
            </nav>
            
            <!-- Log in formular -->
            <article class="col-md-12">
                <form action="checkUser.php" method="post">
                    <div class="form-group">
                        <label for="formUsername" style="font-size:12px; color:#333333;"><b>Brugernavn</b></label>
                        <input type="text" class="form-control" name="formUsername" placeholder="Indtast dit brugernavn" style="border-radius:2px;">
                    </div>
                    <div class="form-group">
                        <label for="formPassword" style="font-size:12px; color:#333333;"><b>Password</b></label>
                        <input type="password" class="form-control" name="formPassword" placeholder="Indtast dit password" style="border-radius:2px;">
                    </div>
                    <input type="submit" value="Log ind" class=" btn btn-default bt-default " style="border-radius:2px;">
                </form>
                <hr>
            </article>
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