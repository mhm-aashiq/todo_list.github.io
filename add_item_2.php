<?php
	require("validate_user.php"); //validated to dashboard, user cant login to other pages
	 //connect to db
	 require("db_connection.php");
	 //display the content of the captured form
	 echo "<pre>";
	 print_r($_REQUEST);// requesting the input from user to display it in array
   //store the data in variables for easy building SQL comamnd later
	 $title        = $_REQUEST['title'];
     $description = $_REQUEST['description'];
  
	 //building the SQL command

	 $sql  = "insert into items(title,description) values(";
     $sql .= "'$title',";
	 $sql .= "'$description')";
	 
	 //echo $sql;
	 //execute the sql command

	 $x = $mysqli->query($sql); // run the sql file

	 if($x>0){
		 //echo "record added successfully";
		 //redirect the user to success page

		 
		 header("location:add_item_3.php?status=pass");
	 }// end of if
	 else{
		// echo "adding record failed";
		//redirect the suer to failed page
		header("location:add_item_3.php?status=fail");

	}// end of else
 ?><!-- end of php code-->