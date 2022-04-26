<?php
	include "lib/header.php";
	include "lib/footer.php";
	session_start();
	global $conn;
	
	if ($_SESSION["is_admin"] == 1){
		echo "<table>";
		$results = mysqli_query($conn,"SELECT * FROM users;",MYSQLI_USE_RESULT);
		while($row = mysqli_fetch_array($results)) {
   			echo "<tr><td>";
			echo $row['email'];
			echo "</td><td>";
			echo $row['username'];
			echo "</td></tr>";
		}
		echo "</table>";

	} else {
		header("Location: welcome.php");
	}
?>
