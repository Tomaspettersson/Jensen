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
     <form class="form-inline" role="form" method="POST" action="">
        <div class="form-group">
            <select class="form-control" id="room_name" name="room_name">
                    <option value="Lilla rummet">Lilla rummet</option>
                    <option value="Mellanrummet">Mellan rummet</option>
                    <option value="Stora rummet">Stora rummet</option>
            </select>
            <input class="input" id="start_time" name="start_time" type="datetime-local">
            <input class="input" id="end_time" name="end_time" type="datetime-local">
            <input type="submit" value="Submit" name="submit"/>
        </div>
    </form>

    <br />
    <br />
    
<!-- Iframe Google Calendar -->    
    
<iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=2&amp;hl=sv&amp;bgcolor=%23ff6600&amp;src=qhp3u22m5fbaptu495kam9cfp8%40group.calendar.google.com&amp;color=%23333333&amp;ctz=Europe%2FStockholm" style=" border:solid 1px #777 " width="1000" height="600" frameborder="2" scrolling="no"></iframe>
    
<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=jensen",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$sql = "INSERT INTO room_booking (room_name, start_time, end_time)
VALUES ('".$_POST["room_name"]."','".$_POST["start_time"]."','".$_POST["end_time"]."')";
if ($dbh->query($sql)) {
header("Location: kalender.php");
}
else{
echo "Booking failed!";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
    
    
<script src="app.js"></script>
</main>

<?php
include("includes/footer.php"); 
?>
