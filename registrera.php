<?php


session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}

?>


<?php


$pageTitle = "Registrera";
$section = "registrera";
include("includes/header.php");
    
?>

<main class="jumbotron">

<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<style>
		.error{
			color:red;
		}
	</style>
</head>
<body>

	
    
    
<h1>Registrera ny användare</h1>
	

	<form action="registrera.php" method="POST">
		<table>
		<tr>
			<td>Personnummer:</td> 
			<td><input type="text" name="pnumber" placeholder="Personnummer"></td>
		</tr>
            	<tr>
			<td>Förnamn:</td>
			<td><input type="password" name="fname" placeholder="Förnamn"></td>
		</tr>
		<tr>
			<td>Efternamn:</td>
			<td><input type="password" name="lname" placeholder="Efternamn"></td>
		</tr>
		<tr>
			<td>E-mail:</td> 
			<td><input type="text" name="email" placeholder="E-mail"></td>
		</tr>
	
		<tr>
			<td><input type="submit" value="Registrera" name="submit" /></td>
			<td></td>
		</tr>
		</table>
	</form>
    
    </body>
</html>










</main>



<?php

include("includes/footer.php");
    
?>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
