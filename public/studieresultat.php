<?php
session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}
?>

<?php
$pageTitle = "Studieresultat";
$section = "studieresultat";
include("layout/header.php");    
?>
         
<main class="jumbotron">
   
        
        
<script src="app.js"></script>
</main>

<?php
include("layout/footer.php");
?>
