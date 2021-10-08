<!DOCTYPE html>

<?php require("validate_user.php");?> <!-- validated to dashboard, user cant login to other pages-->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO list Add</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <script type="text/javascript">

		function validate(){
			var flag = false;

			if(document.getElementById("title").value==""){
				alert('Please fill the title ');
				return flag;
}
			if(document.getElementById("description").value==""){
				alert('Please fill the description ');
				return flag;
}

else {
	flag = true;
}

return flag;
}

	</script>



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
   margin: 10px;
   font-size: 16px;
}
.form-panel{
   margin-top:5%;
}
</style>


</head>
<body>
<section>
    <div class="container">
     <div class="col-lg-12" >
        <div class="form-panel"  onsubmit="return validate()" >
            <form class="form-horizontal style-form"   method="post" action="add_item_2.php"
                            enctype="multipart/form-data">

                <h3><i class="fa fas-file" style="margin-right:10px;"></i> My TO DO List</h3>

                <div class="form-group">
                    <label class="col-sm-2 control-label" style="padding-right:20px;">Title </label>
                    <div class="col-sm-6">
                        <input type="" name="title" id="title" class="form-control " />
                    </div>
                </div><!--end of form group -->
       
                <div class="form-group">
                    <label class="col-sm-2 control-label" style="padding-right:20px;">
                        Description
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" style="min-height:100px;"
                            name="description" id="description"></textarea>
                    </div>
                </div><!--end of form group -->
                         
       
                <div class="form-group">
                    <div class="col-sm-10" style="">
                    <a href="dashboard.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Dashboard</a>
                        <input  type="submit" value="Add" class="btn btn-lg btn-primary " />
                        <input type="reset" value="Clear" class="btn btn-lg btn-danger "  />
                        
                    </div>
                </div><!--end of form group -->

                   </form><!--end of form horizontal-->
           </div> <!-- end of formpanel -->
           </div><!-- end of col12-->
       
           </div>
       
       </section><!-- end of main-content-->
</body>
</html>