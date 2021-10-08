<?php
  require("validate_user.php");// validated to dashboard, user cant login to other pages
  require("db_connection.php");// connect to //

?>

<?php
  $id = $_REQUEST['id'];
  
  $sql = "delete from items where id=$id";
  $x = $mysqli->query($sql);
if($x>0){
  
   header("location:delete_3.php?status=pass");
    }
  else{
   header("location:delete_3.php?status=fail");}
?>