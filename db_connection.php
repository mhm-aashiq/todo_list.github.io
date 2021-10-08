<?php
   
   $server   = "localhost"; // server
   $user     = "root"; //user
   $password = ""; //password
   $db_name  = "todolist"; //database name

   $mysqli = new mysqli($server,$user,$password,$db_name);

   if($mysqli->connect_error){
 		echo $mysqli->errno . "<hr />" . $mysqli->error; // if connection is error
 		echo "<hr />";
 		die("Connection Failed");
 	}
  
 ?>