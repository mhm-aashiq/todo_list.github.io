<?php
	session_start();
	if($_SESSION['userid']==""){
		header("location:login.php");
	}
 ?>
