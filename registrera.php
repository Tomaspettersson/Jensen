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

<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<style>
		.error{
			color:red;
		}
	</style>

<body>
<?php

if(isset($_POST["submit"])){
	$pnumber = $_POST['pnumber'];
	$password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $usertype = $_POST['usertype'];
    



try{

$hashedPass = password_hash($password, PASSWORD_BCRYPT);

require_once("db_connect.php");


$query = "INSERT INTO users (pnumber, hashed_password, fname, lname, usertype)";
$query .= "VALUES (:pnumber, :password, :fname, :lname, :usertype) ";



$ps = $db->prepare($query); //prepared statements

$result = $ps->execute(
	array(
	'pnumber'=>$pnumber, 
	'password'=>$hashedPass,
    'fname'=>$fname,
    'lname'=>$lname,
    'usertype'=>$usertype
)); //Erhåller värdet true eller false. arrayen i execute är tilldelade värden för placeholders i SQL -> :username AND :password


if($result){
	header("Location: registrera.php");
} else{
	echo "Signup failed!";
}


} catch(Exception $exception){

	echo "Query failed, see error message below: <br /><br />";
	echo $exception. "<br /><br />";
}


$user = $ps->fetch(PDO::FETCH_ASSOC);// associative array
//echo $user['id'];

}
else{

}




?>



	<h1>Skapa användare</h1>
	
    
    <form action="registrera.php" method="POST">
	<table>
		<tr>
			<td>Username: </td>
			<td><input type="text" name="pnumber" /></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="text" name="password" /></td>
		</tr>
        <tr>
			<td>First name: </td>
			<td><input type="text" name="fname" /></td>
		</tr>
        <tr>
			<td>Last name: </td>
			<td><input type="text" name="lname" /></td>
		</tr>
        <tr>
			<td>Usertype: </td>
			<td><input type="text" name="usertype" /></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Register!" /></td>

		</tr>
	</table>

    
    
    
    
    

	</body>

</main>



<?php

include("includes/footer.php");
    
?>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
