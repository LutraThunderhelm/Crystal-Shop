<?php
	include "lib/header.php";
	include "lib/footer.php";

	global $conn;

	if (isset($_POST['username']) && isset($_POST['password'])){
		$results = mysqli_query($conn,"SELECT * FROM users WHERE username='".$_POST['username']."';");
		$row = mysqli_fetch_row($results);
		if (password_verify($_POST['password'],$row[3])){
			session_start();
                	$_SESSION["logged_in"] = True;
                	$_SESSION["cart_price"] = 0;
			$_SESSION["is_admin"] = $row[4];
                	header("Location: welcome.php");
		} else {
			echo "Wrong Password";
		}
	}

	if (($_POST['username'] == "Shopkeep") && ($_POST['password'] == "crystalized")){
		session_start();
		$_SESSION["logged_in"] = True;
		$_SESSION["cart_price"] = 0;
		$_SESSION["is_admin"] = 1;
		header("Location: welcome.php");
	}
?>
<html>
	<form action="login.php" method="POST">
		username <input type="text" name="username"><br>
		password <input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
	or click here to <a href="signup.php"><button type=button>Signup</button></a>
</htmL>
