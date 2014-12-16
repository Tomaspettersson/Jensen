<?php


session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}

?>


<?php


$pageTitle = "Kurser";
$section = "kurser";
include("includes/header.php");
    
?>
         
 <main class="jumbotron">


<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container">
	<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Se kursplanen för respektive klass genom att klicka på klassen nedan:</h3>
        </div>   
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                    <div class="col-xs-10">
                        WUK13A
                    </div>
                    <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                </div>
                <div id="detail-1">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">
                            <div class="col-md-6">
                                <strong>Grundläggande webbapplikationsutveckling 40</strong>
Frontend och backendtekniker: HTML, CSS, JavaScript, PHP, MySQL, scrum, XP, W3C, standarder, MySQL, ramverk för JavaScript, versionshanteringssystem, kodgranskning samt lämna feedback.
                            </div>
                            <div class="col-md-6">
                                <strong>Programmeringskunskap 40</strong>
JavaScript, PHP och MySQL.
                            </div>
                           <div class="col-md-6">
                                <strong>Webblogik 30</strong>
Datorkommunikation, internets utveckling, grunderna i HTML, CSS, JavaScript, PHP och My SQL, insikt i andra utvecklingstekniker, gruppdynamik, grunderna i agila metoder samt sociala medier.
                            </div>
                           <div class="col-md-6">
                                <strong>Avancerad webbapplikationsutveckling 60</strong>
Frontend och backend, mashups, säkerhet, optimering, tillgänglighet, användbarhet samt mobila webbappar.
                            </div>
                            <div class="col-md-6">
                                <strong>Examensarbete 30</strong>
Genomförande av ett webbutvecklingsprojekt som ska innehålla/vara applicerbart på utbildningens alla kursmål.
                            </div>
                           <div class="col-md-6">
                                <strong>LIA 100</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2">
                    <div class="col-xs-10">
                        WUK14A
                    </div>
                    <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                </div>
                <div id="detail-2">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">
                            <div class="col-md-6">
                                <strong>Grundläggande webbapplikationsutveckling 40</strong>
Frontend och backendtekniker: HTML, CSS, JavaScript, PHP, MySQL, scrum, XP, W3C, standarder, MySQL, ramverk för JavaScript, versionshanteringssystem, kodgranskning samt lämna feedback.
                            </div>
                            <div class="col-md-6">
                                <strong>Programmeringskunskap 40</strong>
JavaScript, PHP och MySQL.
                            </div>
                           <div class="col-md-6">
                                <strong>Webblogik 30</strong>
Datorkommunikation, internets utveckling, grunderna i HTML, CSS, JavaScript, PHP och My SQL, insikt i andra utvecklingstekniker, gruppdynamik, grunderna i agila metoder samt sociala medier.
                               <br />
                            </div>
                            
                           <div class="col-md-6">
                                <strong>Avancerad webbapplikationsutveckling 60</strong>
Frontend och backend, mashups, säkerhet, optimering, tillgänglighet, användbarhet samt mobila webbappar.
                            </div>
                            <div class="col-md-6">
                                <strong>Examensarbete 30</strong>
Genomförande av ett webbutvecklingsprojekt som ska innehålla/vara applicerbart på utbildningens alla kursmål.
                            </div>
                           <div class="col-md-6">
                                <strong>LIA 100</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </li>



            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-3" data-toggle="detail-3">
                    <div class="col-xs-10">
                        WUK15A
                    </div>
                    <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                </div>
                <div id="detail-3">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">
                            <div class="col-md-6">
                                <strong>Grundläggande webbapplikationsutveckling 40</strong>
Frontend och backendtekniker: HTML, CSS, JavaScript, PHP, MySQL, scrum, XP, W3C, standarder, MySQL, ramverk för JavaScript, versionshanteringssystem, kodgranskning samt lämna feedback.
                            </div>
                            <div class="col-md-6">
                                <strong>Programmeringskunskap 40</strong>
JavaScript, PHP och MySQL.
                            </div>
                           <div class="col-md-6">
                                <strong>Webblogik 30</strong>
Datorkommunikation, internets utveckling, grunderna i HTML, CSS, JavaScript, PHP och My SQL, insikt i andra utvecklingstekniker, gruppdynamik, grunderna i agila metoder samt sociala medier.
                               <br />
                            </div>
                            
                           <div class="col-md-6">
                                <strong>Avancerad webbapplikationsutveckling 60</strong>
Frontend och backend, mashups, säkerhet, optimering, tillgänglighet, användbarhet samt mobila webbappar.
                            </div>
                            <div class="col-md-6">
                                <strong>Examensarbete 30</strong>
Genomförande av ett webbutvecklingsprojekt som ska innehålla/vara applicerbart på utbildningens alla kursmål.
                            </div>
                           <div class="col-md-6">
                                <strong>LIA 100</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
	</div>
</div>
        
    <script src="js/app.js"></script>
    </main>

<?php

include("includes/footer.php");
    
?>
