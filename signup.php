<?php
	include "lib/header.php";
	include "lib/footer.php";

	global $conn;

	if (isset($_POST['username']) && isset($_POST['password']) && ($_POST['username'] != "") && ($_POST['password'] != "")){
		if ($_POST['password'] == $_POST['confirm_password']){
			$sql = $conn->prepare("INSERT INTO users (email, username, encrypted_password,is_admin,is_deleted) VALUES (?,?,?,0,0)");
			$sql->bind_param("sss",
				$_POST['email'],
				$_POST['username'],
				password_hash($_POST['password'], PASSWORD_DEFAULT),
			);

			$sql->execute();
		
			header("Location: login.php");
		} else {
			echo "Passwords do not match";
		}
	} else {
		echo "Username or Password field blank";
	}
?>
<html>
	<form action="signup.php" method="POST">
		email <input type="text" name="email"><br>
		username <input type="text" name="username"><br>
		password <input type="password" name="password"><br>
		confirm password <input type="password" name="confirm_password"><br>
		<input type="submit" value="Signup">
	</form>
	or click here to <a href="login.php"><button type=button>Login</button></a>
</htmL>
