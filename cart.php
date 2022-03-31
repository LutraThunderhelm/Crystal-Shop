<?php
        include "lib/header.php";
        include "lib/footer.php";
	session_start();
        if (!isset($_SESSION["logged_in"])){
                header("Location: /~todom8/Crystal-Shop/login.php");
        }
	if (isset($_SESSION["ignus"])){
		echo '<br>Ignus: ' . $_SESSION["ignus"];
	}
	if (isset($_SESSION["frigus"])){
                echo '<br>Frigus: ' . $_SESSION["frigus"];
        }
	if (isset($_SESSION["lux"])){
                echo '<br>Lux: ' . $_SESSION["lux"];
        }
	if (isset($_SESSION["industria"])){
                echo '<br>Industria: ' . $_SESSION["industria"];
        }

	echo '<br>Total: ' . $_SESSION["cart_price"];

?>


