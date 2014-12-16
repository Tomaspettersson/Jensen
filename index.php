<?php


session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}

?>


<?php


$pageTitle = "Hem";
$section = "hem";
include("includes/header.php");
    
?>

    <h1 id="valkommen">Välkommen till Jensen Online</h1>
<br />

<main class="jumbotron">
    <div class="jumbotron">
        <h1>LÅNGSIKTIG ÄGARE MED FOKUS PÅ KVALITET</h1>
        <p class="lead">Under de senaste 18 åren har jag lagt ner min själ i att uppnå mitt mål - att skapa Sveriges bästa utbildningsföretag. Få saker slår känslan man får när man uppnår sina mål. Just den vinnande känslan vill jag även att du ska känna, både under din tid på JENSEN och i framtiden.</p>
        <p><a class="btn btn-lg btn-success" href="http://127.0.0.1/git/Jensen/nyheter.php" role="button">Läs mer</a></p>
      </div>

      <div class="row marketing startSubs">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
        
    </main>

      
<?php

include("includes/footer.php");
    
?>

        <script src="js/app.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
