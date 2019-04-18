<?php
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "project";
	// create connection
		
		$conn = new mysqli($hostname, $username, $password, $dbname);
		if($conn->connect_error){
			echo "NOT connected";
					die("connection failed:" .$conn->connect_error);}
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
	<div class="form-group" style="padding:50px" >
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off" enctype="multipart/form-date">
			
			<label for="from" style="color:black">Boarding:</label>
			<select class="form-group" name="source" style="width:200px;">
			<option value="Delhi">Delhi</option>
			<option value="Mumbai">Mumbai</option>
			<option value="Bangalore">Bangalore</option>
			<option value="Chennai">Chennai</option>
			<option value="Hyderabad">Hyderabad</option>
			<option value="Pune">Pune</option>
			<option value="Bhopal">Bhopal</option>
			</select>
			<br><br>
			<label for="to" style="color:black">Destination:</label>
			<select class="form-group" name="destination" style="width:200px" >
			<option value="Delhi">Delhi</option>
			<option value="Mumbai">Mumbai</option>
			<option value="Bangalore">Bangalore</option>
			<option value="Chennai">Chennai</option>
			<option value="Hyderabad">Hyderabad</option>
			<option value="Pune">Pune</option>
			<option value="Bhopal">Bhopal</option>
			</select>
			<br><br>
			<button

			<button type="submit" name="searchbus" id="searchbus" class="btn btn-default">TOP BUSES</button>
			
		</form>
	</div>
</div>

<?php
			$destination=$source="";
			if(isset($_POST["searchbus"]))
			{
				$source=$_POST['source'];
				$destination=$_POST['destination'];
				$sql="SELECT * FROM buses WHERE source='".$source."' AND destination='".$destination."' AND rating>80 order by rating DESC";
				$result= $conn->query($sql);
				
				if ($result->num_rows > 0)
				{
					echo '<form action="booking.php" class="form-group" method="POST">';
					while($row = $result->fetch_assoc()) {
					
					echo
						'
							<strong>BUS NO:</strong>'.$row["busno"].'
							<strong>ARRIVAL TIME:</strong>'.$row["arrival_time"].'
							<strong>DEPARTURE TIME:</strong>'.$row["departure_time"].'
							<strong>FARE:</strong>'.$row["fare"].'
							<strong>RATING:</strong>'.$row["rating"].'

							<br><br>';
					
					}
					
					
				}
				else
				{
					echo "<h3>Sorry,No Bus for this route!!</h3>";
				}
	
				
			}
?>	

	
	<div class="footer">
</div>
</bocy>
</html>

