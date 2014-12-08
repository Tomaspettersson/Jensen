<?php


session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}

?>


<?php


$pageTitle = "Min Klass";
$section = "minklass";
include("includes/header.php");
    
?>
         
    <main class="jumbotron">


<form action="minklass.php" method="post" enctype="multipart/form-data">
    Välj schema för uppladdning (När schemat är uppladdat kan eleverna själva se schemat):
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Ladda upp schema" name="submit">
</form><br /><br />
        
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container">
	<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Se klasslista genom att klicka på respektive klass nedan</h3>
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
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                              <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
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
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                              <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
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
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                              <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                Namn: Tomas Pettersson Personnr: 950101-1010
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