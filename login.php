<?php
	include "lib/header.php";
	include "lib/footer.php";
	if (($_POST['username'] == "Shopkeep") && ($_POST['password'] == "crystalized")){
		session_start();
		$_SESSION["loggedIn"] = True;
		header("Location: welcome.html");
	}
?>
<html>
	<form action="login.php" method="POST">
		username <input type="text" name="username"><br>
		password <input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
</htmL>
