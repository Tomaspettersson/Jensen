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
	$user = $email = $pass = $rePass = $usertype = "" ;
	$userErr = $emailErr = $passErr = $rePassErr = $usertypeErr = "";
	if(isset($_POST["submit"])){							
	
		$user	= trim($_POST["username"]);		
		$email 	= trim($_POST["email"]);				
		$pass	= trim($_POST["password"]);						
		$rePass = trim($_POST["re_password"]);	
        $usertype = trim($_POST["usertype"]);

				
		if (!preg_match("/^[A-Za-z0-9]*$/",$user)) {
			$userErr = "Only letters and numbers are allowed"; 
		}		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; 
		}
		
		if (empty($user)) {
			$userErr = "Username is required";
		}
	    if (empty($email)) {
			$emailErr = "Email is required";
	    }
	    if (empty($pass)) {
			$passErr = "Password is required";
	    }
	    if (empty($rePass)) {
			$rePassErr = "re-enter password is required";
		}
		if ($rePass != $pass) {
			$rePassErr = "The re-entered password don't match";
		}
          if (empty($usertype)) {
			$usertypeErr = "Usertype is required";
          }
		
		
		if(empty($userErr) && empty($emailErr) && empty($passErr)&& empty($rePassErr) && empty($usertypeErr)){
			echo "It is validated. You are ready for some DB statements now"; 
		}
	}
?>

	<h1>Skapa användare</h1>
	Fält med <span class="error">*</span> är obligatoriska.<br /><br /><br />

	<form action="registrera.php" method="POST">
		<table>
		<tr>
			<td>Username:</td> 
			<td><input type="text" name="username" value="<?php echo $user; ?>" /><span class="error">* <?php echo $userErr; ?></span></td>
		</tr>
		<tr>
			<td>E-mail:</td> 
			<td><input type="text" name="email" value="<?php echo $email; ?>"/><span class="error">* <?php echo $emailErr; ?></span></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" /><span class="error">* <?php echo $passErr; ?></span></td>
		</tr>
		<tr>
			<td>Re-password:</td>
			<td><input type="password" name="re_password" /><span class="error">* <?php echo $rePassErr; ?></span></td>
		</tr>
        <tr>
			<td>Usertype:</td>
			<td><input type="text" name="usertype" /><span class="error">* <?php echo $usertypeErr; ?></span></td>
		</tr>
		<tr>
			<td><input type="submit" value="Registrera" name="submit" /></td>
			<td></td>
		</tr>
		</table>
	</form>

	</body>

</main>



<?php

include("includes/footer.php");
    
?>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
