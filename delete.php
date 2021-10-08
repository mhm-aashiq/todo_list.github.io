<!DOCTYPE html>
<?php
   require("validate_user.php");//validated to dashboard, user cant login to other pages
   //connect to the db
	require("db_connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
  /* height: 1500px; */
  font-family: sans-serif;

}

.col-lg-4{
  float: left;

}

.btn{
  margin-top: 80px;
  width: 100px;

}
.col-sm-2{
  font-weight: bold;

}
.btn{
   padding: 10px 10px 10px 10px;
   width: 20%;
   margin: 20px;
   font-size: 16px;
  
}
.form-panel{
   margin-top:5%;
}
</style>
<body>

<section>

    <?php 
        $id = $_REQUEST['id'];//put the pid to a SQL command and search
        $sql = "select * from items where id=$id";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        ?>
<div class="container">
    <div class="col-lg-12" >
  
    <!-- BASIC FORM ELELEMNTS -->
    
      
        <div class="form-panel"   >
        <h3><i class="fa fas-file" style="margin-right:10px;"></i> delete Products</h3>
          <form class="form-horizontal style-form" method="post" action="delete_2.php">

          <div class="form-group">
            <label class="col-sm-2 control-label" style="padding-right:20px;">Name </label>
            <div class="col-sm-6">
              <input type="hidden" name="id" value="<?php echo $row['id'];?>">
              <input type="text" name="title" id="title"
              class="form-control " value="<?php echo $row['title']; ?>" />
            </div>
          </div><!--end of form group -->

          <div class="form-group">
            <label class="col-sm-2 control-label"
              style="padding-right:20px;"
              value="">
              Description
            </label>
            <div class="col-sm-6">
              <textarea class="form-control" style="min-height:100px;" name="description" id="description"><?php echo $row['description']; ?></textarea>
            </div>
          </div> <!--end of form group-->

         

          <div class="form-group">

            <div class="col-sm-10">
              <input type="submit" value="Delete" class="btn btn-lg btn-danger "/>
  						<input type="reset" value="Clear" class="btn btn-lg btn-warning " />
            </div><!--end of col10-->
          </div><!--end of form group -->

      </form><!--end of form horizontal -->
 </div><!-- end of row-->

 <?php
        }//end of if
    }
?>


     </div> <!-- end of col8-->
  </div> <!-- end of col sm 8 -->
</div><!--end of row mt -->


</section><!-- end of main-content-->
</body>
</html>