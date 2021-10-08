<!DOCTYPE html>

<?php require("db_connection.php");
      require("validate_user.php");
?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do list edit</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
.container{
    margin-top:100px;
}
</style>

<body>
<div class="container">
  <div class="row">

    <?php

      $status = $_REQUEST['status']; //if the status is

      if($status=="pass"){ //passed
        ?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          <h2 class="alert-heading">Status: Success</h2>
          <hr />
          <p>
          The product that you was edited is <p style="color:green;">successfully</p> <p> what do you want to do next... </p> <br />
            <br /><br />
            <a href="dashboard.php" class="btn btn-success">Edit Another Record</a>
            <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
          </p><!-- end of p tag-->
        </div> <!-- end of alert -->
        <?php
      } // end of if
      else{ //failed
        ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          <h2 class="alert-heading">Status: Failure</h2>
          <hr />
          <p>
            The product that you was edited is <p style="color:red;">Not Successfully added</p> <p> what do you want to do next... </p><br />
            <br /><br />
            <a href="dashboard.php" class="btn btn-primary">Try Again</a>
            <a href="dashboard.php" class="btn btn-danger">Back to Dashboard</a>
          </p>
        </div><!-- end of alert-->
        <?php
      } //end of else

    ?>

  </div><!-- end of row-->
</div><!-- end of container-->

</body>
</html>