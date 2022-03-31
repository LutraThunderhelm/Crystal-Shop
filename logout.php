<?php
        include "lib/header.php";
        include "lib/footer.php";
	session_start();
	session_destroy();
	header("refresh:5;url=login.php");
?>

<html>
	goodbye!
</html>

