<?php
	session_start();
   if (!isset($_SESSION['username']))
   {
		header('location: adminlog.php');
	}
	
	
	
	?>



<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>Let's Book</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   padding: 20px;
   margin-top: 20px;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   clear:left;
}


.leftcolumn {   
    float: center;
    width: 40%;
	
}
.card {
    text-align:center;
    padding: 20px;
    margin-top: 20px;
}



</style>

<body style="background-image:url('https://www.walldevil.com/wallpapers/a44/wallpaper-background-web-fractal21-wallpapers-3dfiction-images.jpg');">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hyperloop</a>
	  <ul class="nav navbar-nav">
	  <li><a href="adlogout.php">LOGOUT</a></li>
	  </ul>				
	  
    </div>
   
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default" >Submit</button>
    </form>
  </div>
</nav>
	

	

	<div class="leftcolumn">
	<div class="card">
	
		<a href="addbus.php" class="btn btn-primary">ADD BUS</a><br><br>
		<a href="removebus.php" class="btn btn-primary">REMOVE BUS</a><br><br>
		
	</div>
	</div>

  
  

<div class="footer">
</div>

</body>
</html>