
<?php
    
	session_start();
   if (!isset($_SESSION['username']))
   {
		header('location: login.php');
	}



?>




<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>Timeline</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<style>
.footer {
    padding: 20px;
    margin-top: 20px;
	color: white;
    background-color: black;
    clear: left;
    text-align: center;
}



</style>

<body style="background-image:url('https://www.walldevil.com/wallpapers/a44/wallpaper-background-web-fractal21-wallpapers-3dfiction-images.jpg');">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="timeline.php">Hyperloop</a>
    </div>
    <ul class="nav navbar-nav">
      
	  <li><a href="lets book.php">Let's Book</a></li>
	  
	  <li><a href="#">About Us</a></li>
	  <li><a href="#">Contact Us</a></li>
	  <li><a href="logout.php">LOGOUT</a></li>
      
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default" >Submit</button>
    </form>
  </div>
</nav>



<div class="fluid-container">

	<img class="mySlides" src="bus1.jpg" style="width:100%"  height="550px">
	<img class="mySlides" src="bus2.jpg" style="width:100%"  height="550px">
	<img class="mySlides" src="bus3.jpg" style="width:100%"  height="550px">
	<img class="mySlides" src="bus4.jpg" style="width:100%"  height="550px">
	<img class="mySlides" src="bus5.jpg" style="width:100%"  height="550px">
	<img class="mySlides" src="bus6.jpg" style="width:100%"  height="550px">
 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 5 seconds
}
</script>

<div class="footer">
</div>

</body>
</html>
