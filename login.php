<!DOCTYPE html>
<?php session_start(); ?>
<style media="screen">
.container{
	padding-top: 150px;
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
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
      <link href="css/style-responsive.css" rel="stylesheet">
      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!--external css-->
      <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
      <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/style-responsive.css" rel="stylesheet">
      <script src="lib/chart-master/Chart.js"></script>

</head>
<body>


<?php

    require('db_connection.php');

    // When form submitted, check and create user session.
    if (isset($_POST['userid'])) {
        $userid = stripslashes($_REQUEST['userid']);    // removes backslashes
        $userid = mysqli_real_escape_string($mysqli, $userid);
        $access_code = stripslashes($_REQUEST['access_code']);
        $access_code = mysqli_real_escape_string($mysqli, $access_code);
        // Check user is exist in the database
        $query    = "SELECT * FROM `logs` WHERE userid='$userid'
                     AND access_code='" . md5($access_code) . "'";
        $result = mysqli_query($mysqli, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['userid'] = $userid;
            // Redirect to user dashboard page
            header("Location:dashboard.php");
        } else {
            echo "<div class='container'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";

        }
    } else {
?>
<section>
<div class="container">


    <form class="row" method="post" name="login" onsubmit="validate();">
        <h1 class="login-title" style="color:white; font-size:40px">Login</h1>
        <input type="text" class="form-control" id="userid"  name="userid"  placeholder="Username" autofocus="true" >
        <br>
        <input type="password" class="form-control" id = "access_code" name="access_code" placeholder="Password"/>
        <br>
        <input type="submit" value="Login" name="submit" class="btn btn-primary login-button"/>
        <hr>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
    </form>

<?php
    }
?>
</div>
</section>
  
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

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
    <script>
    $.backstretch("img/3.jpg", {
        speed: 500
    });
    </script>

<script type="text/javascript">

     


      function validate(){
        var flag = false;

        if(document.getElementById("userid").value==""){
          alert('Invalid Username or Password ');
          return flag;
        }
        else if(document.getElementById("access_code").value==""){
          alert('Passwords no matching or not filled');
          return flag;

        }
        
        else {
          flag = true;
        }

        return flag;
      }
    

</script>









</body>
</html>
