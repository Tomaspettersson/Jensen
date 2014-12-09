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
    <main class="jumbotron">
        
        
        <h3>LÅNGSIKTIG ÄGARE MED FOKUS PÅ KVALITET</h3>
        <p>Snabbaste vägen till jobb 
Vår senaste uppföljning i januari 2014 visade att 90 % av de som genomför våra Yh-utbildningar får jobb i rätt bransch. Det finns många orsaker till detta bland annat: hög kvalitet på utbildningen, samarbete med branschens ledande företag, lärare från näringslivet och gediget analysarbete kring framtidens yrkesroller.</p>
        <p><a class="btn btn-primary btn-lg" href="nyheter.php" role="button">Läs mer</a></p>
        
        

    </main>
      
    <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/etableringslots.jpg" alt="...">
      <div class="caption">
          
        <h3>JENSEN etableringslots</h3>
        <p>Nu erbjuder vi etableringslots för dig som är nyanländ i Sverige och på jakt efter ett jobb eller utbildning. Från 1 december erbjuder vi även JENSEN stöd och matchning.</p>
        <p><a href="http://www.jenseneducation.se/JENSEN-karriar--utveckling/Vara-tjanster/Etableringslots/" class="btn btn-primary" role="button">Läs mer</a>
      </div>
    </div>
  </div>

      
         
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/hakan_jensen.jpg" alt="...">
      <div class="caption">
        <h3>Långsiktig ägare med fokus på kvalitet</h3>
        <p>Under de senaste 18 åren har jag lagt ner min själ i att uppnå mitt mål - att skapa Sveriges bästa utbildningsföretag. Få saker slår känslan man får när man uppnår sina mål. Just den vinnande känslan vill jag även att du ska känna, både under din tid på JENSEN och i framtiden. Jag berättar mer om du trycker på knappen nedan!</p>
        <p><a href="http://www.jenseneducation.se/Global/Puffar/Di_Weekend_20120427.pdf" class="btn btn-primary" role="button">Läs mer</a>
      </div>
    </div>
  </div>

      
      
         
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/medarbetare.jpg" alt="...">
      <div class="caption">
        <h3>Arbeta hos oss?</h3>
        <p>JENSENs mest värdefulla tillgång är medarbetarna. Därför är det viktigt att vi kontinuerligt ser över vad vi som arbetsgivare kan erbjuda för att attrahera och rekrytera de för JENSEN bästa medarbetarna. Vårt medarbetarerbjudande är ett samlingsbegrepp för vad vi erbjuder i form av exempelvis kultur, ledarskap, möjlighet till karriärutveckling och förmåner.</p>
        <p><a href="http://www.jenseneducation.se/JENSEN-education/Jobba-hos-oss/Lediga-tjanster/" class="btn btn-primary" role="button">Läs mer</a>
      </div>
    </div>
  </div>
</div>  

      
<?php

include("includes/footer.php");
    
?>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
