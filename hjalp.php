<?php


session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}

?>


<?php


$pageTitle = "Enkater";
$section = "enkater";
include("includes/header.php");
    
?>
         
    <main class="jumbotron">
        <h1 class="FAQ">FAQ</h1><br />
 
        <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Vart hittar jag senaste nytt om Jensen?</h4>
    <p class="list-group-item-text">Senaste nytt hittar du under fliken "Nyheter" samt på www.jenseneducation.se.</p>
  </a>
            
                <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Hur bokar jag ett rum?</h4>
    <p class="list-group-item-text">Rumsbokningen finns under fliken "Kalender".</p>
  </a>
                        <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Vart hittar jag senaste nytt om Jensen?</h4>
    <p class="list-group-item-text">Senaste nytt hittar du under fliken "Nyheter" samt på www.jenseneducation.se.</p>
  </a>
                                <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Vart hittar jag senaste nytt om Jensen?</h4>
    <p class="list-group-item-text">Senaste nytt hittar du under fliken "Nyheter" samt på www.jenseneducation.se.</p>
  </a>
            
</div>
        
        
    <script src="app.js"></script>
    </main>

<?php

include("includes/footer.php");
    
?>
