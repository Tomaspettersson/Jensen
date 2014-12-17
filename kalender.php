<?php
session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}
?>
<?php
$pageTitle = "Kalender";
$section = "kalender";
include("includes/header.php");  
?>
         
<main class="jumbotron">

      <h3>Boka ditt rum nedan</h3>

     <form class="form-inline" role="form">
       <div class="form-group">
            <select class="form-control" id="room">
                    <option>Lilla rummet</option>
                   <option>Mellan rummet</option>
                   <option>Stora rummet</option>
            </select>
            <input class="input" id="date" type="datetime-local">
            <input class="input" id="date2" type="datetime-local">
            <button id="addbutton" class="btn btn-success" type="button">Boka</button>
        </div>
    </form>

    <script src="app.js"></script>
</main>
<?php

include("includes/footer.php");
    
?>
