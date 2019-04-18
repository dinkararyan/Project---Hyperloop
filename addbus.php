<?php


$hostname='localhost';
$username='root';
$password='root';
$dbname='project';


	$conn = new mysqli($hostname,$username,$password,$dbname);
	if($conn->connect_error)
	{
		echo "Connection Failed";
		die("connection failed:".$conn->connect_error);
	}
	
	
	if(isset($_POST["add"])){
		$busno=$_POST['busno'];
		$source=$_POST['source'];
		$destination=$_POST['destination'];
		$arrival=$_POST['arrival'];
		$departure=$_POST['departure'];
		$fare=$_POST['fare'];
		
		$sql="INSERT INTO buses (busno,source,destination,arrival_time,departure_time,fare) VALUES ('$busno','$source','$destination','$arrival','$departure','$fare');";
		if ($conn->query($sql) === TRUE) {
				//echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
					}

	}
?>








<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>Admin Login</title>

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
.form-group{
	text-align:center;

}

.error {
	font-size:12px;
	color: #FF0000;
	}

</style>

<body style="background-image:url('https://www.walldevil.com/wallpapers/a44/wallpaper-background-web-fractal21-wallpapers-3dfiction-images.jpg');">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminopt.php">Hyperloop</a>
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

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">


  <div class="form-group" style="padding:50px;">
  
	<label for="busno" style="color:white;">Busno:</label>
	<input type="busno" name="busno" id="busno" placeholder="Busno" size="20"><br><br>
	
	<label for="source" style="color:white;">Source:</label>
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
	<label for="destination" style="color:white;">Destination:</label>
		<select class="form-group" name="destination" style="width:200px;">
			<option value="Delhi">Delhi</option>
			<option value="Mumbai">Mumbai</option>
			<option value="Bangalore">Bangalore</option>
			<option value="Chennai">Chennai</option>
			<option value="Hyderabad">Hyderabad</option>
			<option value="Pune">Pune</option>
			<option value="Bhopal">Bhopal</option>
		</select>
		<br><br>
	<label for="arrival_time" style="color:white;">Arrival Time:</label>
	<input type="time" name="arrival" id="arrival" ><br><br>
	
	<label for="departure_time" style="color:white;">Departure Time:</label>
	<input type="time" name="departure" id="departure" ><br><br>
	
	<label for="fare" style="color:white;">Fare:</label>
	<input type="text" name="fare" id="fare" placeholder="Fare"><br><br>
		
  
  <button type="submit" class="btn btn-default" name="add">Add Bus</button>
  </div>
  
</form>
	



  
  

<div class="footer">
</div>

</body>


</html>