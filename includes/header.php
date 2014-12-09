
<?php

$inactiveTime = 900;

if(isset($_SESSION['time'])) 
{
  $session_life = time() - $_SESSION['time'];
    
  if($session_life > $inactiveTime) 
    { 
        header("Location: logout.php"); 
    }
}

$_SESSION['time'] = time();

?>

<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <meta charset="UTF-8">
  <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
</head>

    
    
    
 <nav class="navbar navbar-custom" role="navigation">
     <div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['fname']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="logout.php">Logga ut</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
         </div>
</nav>


<?php
    
   if($_SESSION['usertype']==1):
    ?>
    
  <div class="container">
    
    <header class="page-header">
        <div class="btn-group">
        <a class="btn btn-primary btn-lg" type="button" href="http://127.0.0.1/git/Jensen/">Startsida</a>
        <a class="btn btn-success btn-lg" type="button" href="http://127.0.0.1/git/Jensen/minklass.php" >Min Klass</a>
        <a class="btn btn-warning btn-lg" type="button" href="http://127.0.0.1/git/Jensen/kurser.php">Kurser</a>
        <a class="btn btn-danger btn-lg" type="button" href="http://127.0.0.1/git/Jensen/nyheter.php">Nyheter</a>
        <a class="btn btn-info btn-lg" type="button" href="http://127.0.0.1/git/Jensen/kalender.php">Kalender</a>
        <a class="btn btn-warning btn-lg" type="button" href="http://127.0.0.1/git/Jensen/meddelanden.php">Meddelanden</a>
        <a class="btn btn-primary btn-lg" type="button" href="http://127.0.0.1/git/Jensen/studieresultat.php">Studieresultat</a>
        <a class="btn btn-success btn-lg" type="button" href="http://127.0.0.1/git/Jensen/enkater.php">Enkäter</a>
            <a class="btn btn-danger btn-lg" type="button" href="http://127.0.0.1/git/Jensen/registrera.php">Registrera</a>
        </div>
        
        
     <?php elseif ($_SESSION['usertype']==2): ?>
         <div class="container">
    
    <header class="page-header">
        <div class="btn-group">
        <a class="btn btn-primary btn-lg" type="button" href="http://127.0.0.1/git/Jensen/">Startsida</a>
        <a class="btn btn-success btn-lg" type="button" href="http://127.0.0.1/git/Jensen/minklass.php">Min Klass</a>
        <a class="btn btn-warning btn-lg" type="button" href="http://127.0.0.1/git/Jensen/kurser.php">Kurser</a>
        <a class="btn btn-danger btn-lg" type="button" href="http://127.0.0.1/git/Jensen/nyheter.php">Nyheter</a>
        <a class="btn btn-info btn-lg" type="button" href="http://127.0.0.1/git/Jensen/kalender.php">Kalender</a>
        <a class="btn btn-warning btn-lg" type="button" href="http://127.0.0.1/git/Jensen/meddelanden.php">Meddelanden</a>
        <a class="btn btn-primary btn-lg" type="button" href="http://127.0.0.1/git/Jensen/studieresultat.php">Studieresultat</a>
        <a class="btn btn-success btn-lg" type="button" href="http://127.0.0.1/git/Jensen/enkater.php">Enkäter</a>
        
            
            <?php else: ?>
         <div class="container">
    
    <header class="page-header">
        <div class="btn-group">
        <a class="btn btn-primary btn-lg" type="button" href="http://127.0.0.1/git/Jensen/">Startsida</a>
        <a class="btn btn-success btn-lg" type="button" href="http://127.0.0.1/git/Jensen/minklass.php">Min Klass</a>
        <a class="btn btn-warning btn-lg" type="button" href="http://127.0.0.1/git/Jensen/kurser.php">Kurser</a>
        <a class="btn btn-danger btn-lg" type="button" href="http://127.0.0.1/git/Jensen/nyheter.php">Nyheter</a>
        <a class="btn btn-info btn-lg" type="button" href="http://127.0.0.1/git/Jensen/kalender.php">Kalender</a>
        <a class="btn btn-warning btn-lg" type="button" href="http://127.0.0.1/git/Jensen/meddelanden.php">Meddelanden</a>
        <a class="btn btn-primary btn-lg" type="button" href="http://127.0.0.1/git/Jensen/studieresultat.php">Studieresultat</a>
        <a class="btn btn-success btn-lg" type="button" href="http://127.0.0.1/git/Jensen/enkater.php">Enkäter</a>
 
            
        <?php endif; ?>
        
        
        
        
        
        
  </header>
      
      
      
      
      
      