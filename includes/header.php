
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <nav class="navbar navbar-inverse">
        <div class="container">
           <a class="navbar-brand" href="#">Jensen Online</a>
            <a id="hjalp" class="navbar-brand" href="logout.php">Logga ut</a>
           <a id="hjalp" class="navbar-brand" href="http://127.0.0.1/git/Jensen/hjalp.php">Hjälp</a>  
        </div>
    </nav>



    
  <div class="container">
    
    <header class="page-header">
        <div class="btn-group">
        <a class="btn btn-primary btn-lg" type="button" href="http://127.0.0.1/git/Jensen/">Startsida</a>
        <button class="btn btn-success btn-lg">Min Klass</button>
        <button class="btn btn-warning btn-lg">Kurser</button>
        <a class="btn btn-danger btn-lg" type="button" href="http://127.0.0.1/git/Jensen/nyheter.php">Nyheter</a>
        <a class="btn btn-info btn-lg" type="button" href="http://127.0.0.1/git/Jensen/kalender.php">Kalender</a>
        <button class="btn btn-warning btn-lg">Meddelanden</button>
        <button class="btn btn-primary btn-lg">Studieresultat</button>
        <button class="btn btn-success btn-lg">Enkäter</button>
        </div>
  </header>