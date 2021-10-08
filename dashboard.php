<!DOCTYPE html>

<?php
	require("validate_user.php");
    require("db_connection.php");
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.png" rel="icon">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <link href="css/style-responsive.css" rel="stylesheet">
  
    <title>Dashboard</title>

<style>
.container tr,th{
    text-align:center;
}




</style>
</head>
<body>
    <section>
        <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
            <h1 class="text-center">My To Do List</h1>
            <a href="add_item_1.php" class="btn btn-primary ">Add new Item</a>
            <a href="login.php" class="btn btn-danger " style = "float:right">Logout</a>
        <hr />

    <?php 
           
        $sql = "SELECT id, title, description FROM items";
        $rs = $mysqli-> query($sql);
        if(mysqli_num_rows($rs)>0){
         
        ?>
        
        <table class="table table-bordered">
        
            <tr>
            	<th>ID</th>
            	<th>Title</th>
            	<th>Description</th>
                <th>Actions</th>
            		
            </tr>
           <?php 
           while($row=mysqli_fetch_assoc($rs)) {
               ?>
          
            <tr>
            <td><?php echo $row['id']; ?></td>
  			<td><?php echo $row['title']; ?></td>
  			<td><?php echo $row['description']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a> &nbsp;
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
            </td>
            </tr>
        <?php   
    
        } }       
        else{
        ?>
        
        <tr>
            <td colspan="6" class="text-center"><h1 class="text-danger">No Records</h1></td>
        </tr>

        <?php
        	}
        ?>

    </table>

    <hr />
    
    
    <br>
    <br>
    <br>
        </div><!-- end of col12-->
    </div><!-- end of row-->
</div><!-- end of container-->
</section>

</body>
</html>