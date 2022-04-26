<?php
        include "lib/header.php";
        include "lib/footer.php";
	session_start();
        if (!isset($_SESSION["logged_in"])){
                header("Location: /~todom8/Crystal-Shop/login.php");
        }
	if (isset($_POST["name"])){
		setcookie("name", $_POST["name"], time() + (86400 * 30), "/");
	}
	if ($_SESSION["is_admin"] == 1) {
		echo '<a href="admin.php">take me to the admin page</a>';
	}

?>
<html>
	<br>Name:
	<form method="POST" action="welcome.php">
		<input type="text" name="name">
		<input type="submit" value="Submit">
	</form>
</html>
