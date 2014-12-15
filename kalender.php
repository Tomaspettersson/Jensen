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
    <div>
      <h3>Boka ditt rum nedan</h3>
        <form  method="post">
          <div id="tasks">
   
          </div>
        </form>
        <p>
     <form class="form-inline" role="form">
       <div class="form-group">
           <div class="input-group-lg">
               <select class="form-control" id="room">
                    <option>Lilla rummet</option>
                   <option>Mellan rummet</option>
                   <option>Stora rummet</option>
               </select>
           </div>
       </div>
          <input class="input-lg" id="date" type="date">
          <input class="input-lg" id="date2" type="date">
          <button id="addbutton" class="btn btn-primary" type="button">Boka</button>
         </form>
          
          
        </p>
      </div>





    <script src="app.js"></script>
    </main>

<?php

include("includes/footer.php");
    
?>
