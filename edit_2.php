<?php
 
  //connect to database
  require("db_connection.php");
  require("validate_user.php");

  //copy the data from form fields to vars
  $id          = $_REQUEST['id'];
  $title         = $_REQUEST['title'];
  $description  = $_REQUEST['description'];


  //build the sql command dynamically

  $sql  = "update items set ";
  $sql .= "title='$title',";
  $sql .= "description='$description'";
  $sql .= "where id=$id";

// echo "<pre>";
// print_r($_REQUEST);
// die();

  //execute the SQL command
  $x = $mysqli->query($sql);

  if($x>0){
  
    header("location:edit_3.php?status=pass");
  }

  else{
    //sql was not executed properly
    header("location:edit_3.php?status=fail");
  }

?>
