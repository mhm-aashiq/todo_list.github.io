
<?php

require("db_connection.php");
?>

<!DOCTYPE html>

<style media="screen">

.container{
	padding-top: 100px;
    align-items: center;
    color:white;


}
.container p{
    font-size:20px
}
.row{
	align-items: center;
	/* width: 900px; */
	/* padding-left: 200px; */
}


</style>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<title>Registration</title>
<link rel="stylesheet" href="style.css"/>

<!-- Favicons -->

<!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

<!-- Bootstrap core CSS -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--external css-->
<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
<link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">
<script src="lib/chart-master/Chart.js"></script>

<script type="text/javascript">

    function validate(){
        var flag = false;

        if(document.getElementById("userid").value==""){
            alert('Please fill the userid');
            return flag;
}
        if(document.getElementById("access_code").value==""){
            alert('Please fill the access_code');
            return flag;
}
        if(document.getElementById("user_group").value==""){
            alert('Please fill the user_group');
            return flag;
}
}
else {
flag = true;
}

return flag;
}

</script>

</head>
<body>



<!--main content start-->
<title>
  Register User
</title>
</head>
<body>

<?php

if (isset($_REQUEST['userid'])) {
        // removes backslashes
        $userid = stripslashes($_REQUEST['userid']);
        //escapes special characters in a string
        $userid = mysqli_real_escape_string($mysqli, $userid);
        // $user_group    = stripslashes($_REQUEST['user_group']);
        // $user_group    = mysqli_real_escape_string($mysqli, $user_group);
        $access_code = stripslashes($_REQUEST['access_code']);
        $access_code = mysqli_real_escape_string($mysqli, $access_code);

        $query    = "INSERT into `logs` (userid, access_code)
                                 VALUES ('$userid', '" . md5($access_code) . "')";
        $result   = mysqli_query($mysqli, $query);
        if ($result) {
                echo "<div class='container'>
                            <h3 style='color:white;'>You are registered successfully.</h3><br/>
                            <p class='link'style='color:white;'>Click here to <a href='login.php'>Login</a></p>
                            </div>";



        } else {
                echo "<div class='form'>
                            <h3>Required fields are missing.</h3><br/>
                            <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                            </div>";

                header('location:login.php');
        }
} else {

?>


<section>
<div class="container">


    <form class="row" method="post" name="login" onsubmit="validate();">
        <h1 class="login-title" style="color:white; font-size:40px">Register</h1>
        <input type="text" class="form-control" id="userid"  name="userid"  placeholder="Username" autofocus="true" >
        <br>
        
        <input type="password" class="form-control" id = "access_code" name="access_code" placeholder="Password"/>
        <br>
        <input type="submit" name="submit" value="Register"  class="btn btn-primary login-button"/>
        <hr>
        <p class="link">Already have an account? <a href="login.php">Login</a></p>
    </form>

<?php
    }
?>
</div>
</section>




<!--footer end-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="lib/jquery/jquery.min.js"></script>

<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="lib/sparkline-chart.js"></script>
<script src="lib/zabuto_calendar.js"></script>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>

<script>

  $.backstretch("img/3.jpg", {
    speed: 500
  });
</script>


</body>

</html>

