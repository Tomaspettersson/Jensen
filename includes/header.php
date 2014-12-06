
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
  <meta charset="UTF-8">
  <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
</head>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <nav class="navbar navbar-custom">
        <div class="container">
           <a class="navbar-brand" href="#">Jensen Online</a>

            <a id="hjalp" class="navbar-brand" href="logout.php">Logga ut</a>
           <a id="hjalp" class="navbar-brand" href="http://127.0.0.1/git/Jensen/hjalp.php">Hjälp</a>  
 
  <div class="dropdown">
      <a id="hjalp" class="navbar-brand dropdown-toggle" id="dropdownMenu1" aria-expanded="true" href="">
          <?php echo $_SESSION['fname']; ?><span class="caret"></span>
      </a><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    
    </ul>
</div>


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
      
      
      
      
      
      