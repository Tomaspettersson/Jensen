<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jensen Online</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
    
 <nav class="navbar navbar-inverse">
        <div class="container">
           <a class="navbar-brand" href="#">Jensen Online</a>
           <a id="hjalp" class="navbar-brand" href="http://127.0.0.1/git/Jensen/hjalputloggad.php">Hjälp</a>
        </div>
    </nav>
    
    
    <header class="page-header">
    </header>
    
    <?php

if(isset($_POST["submit"])){
	$pnumber = $_POST['pnumber'];
	$password = $_POST['password'];


try{


require_once("db_connect.php");


$query = "SELECT * ";
$query .= "FROM users ";
$query .= "WHERE pnumber = :pnumber ";
$query .= "AND password = :password ";


$ps = $db->prepare($query);

$result = $ps->execute(
	array(
	'pnumber'=>$pnumber, 
	'password'=>$password
));

$user = $ps->fetch(PDO::FETCH_ASSOC);
    
if($user){
    //print_r($user);
	$_SESSION['pnumber'] = $user['pnumber'];
	$_SESSION['id'] = $user['id'];
    $_SESSION['usertype'] = $user['usertype'];
    $_SESSION['fname'] = $user['fname'];
	header("Location: index.php");
    //$url = "welcome.php";
    //echo '<script>window.location = "'.$url.'";</script>';
    
} else{
	echo "<script>alert ('Wrong username/password!')</script>";
}


} catch(Exception $exception){

	echo "Query failed, see error message below: <br /><br />";
	echo $exception. "<br /><br />";
}



}
else{

}




?>      
    
<div class="container">
<main class="jumbotron">
           
<form role="form" action="login.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div>
                    <h3 class="text-center login-title">Välkommen till Jensen Online</h3>
                    <br />
                    <br />
                    <img class="profile-img" src="images/loginImg.png" alt="loginImage">
                    <form class="form-signin">
                    <input type="text" name="pnumber" class="form-control" placeholder="Ex 199010190202" required autofocus>
                    <input type="password" name ="password" class="form-control" placeholder="Password" required>
                    <br />
                    <br />
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</form>
</main>

</body>
</html>
