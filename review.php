<?php

$hostname='localhost';
$username='root';
$password='root';
$dbname='project';

	$conn = new mysqli($hostname,$username,$password,$dbname);
	if($conn->connect_error)
	{
		echo "Connection Failed";
		die("Connection Failed:".$conn->connect_error);
	}
	
		if(isset($_POST["submit"])){
	$rating=$_POST['rating'];
	$bookid=$_POST['bookid'];
	
	
	
				$sql2="UPDATE buses SET rating= rating +'".$rating."' WHERE busno=(SELECT busno from booking where bookid='".$bookid."')";
				if($conn->query($sql2) == TRUE)
				{	
					echo "Rated Successfully";
					header("location:lets book.php");
				}
				else
					echo "Not rated";
			
	

	}
?>





<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>Intercity Booking</title>

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
   padding: 20px
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
.form-group{
	text-align:center;
}



</style>



<body style="background-image:url('http://blog.hostbaby.com/wp-content/uploads/2014/03/Trees_1920x1234.png');">


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




<div class="container">
	<div class="form-group" style="padding:50px;">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
		
			<label for="Bookingid" style="font-size:18px;">Booking Id:</label>
			<input type="text" name="bookid" id="bookid" placeholder="Booking Id" ><br><br> 
			
			<label for="Rating" style="font-size:18px;">Rating:</label>
			<input type="number" name="rating" id="rating" min="-5" max="5"><br><br>
			
			<input type="submit" name="submit" value="submit" id="submit" class="btn btn-default" style="font-size:18px;">
			
		</form>
	</div>
</div>

<div class="footer">
</div>
	
	
</body>
</html>


