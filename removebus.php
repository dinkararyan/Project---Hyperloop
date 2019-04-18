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

	if(isset($_POST["remove"])){
		$busno=$_POST['busno'];
		
		$sql = "DELETE FROM buses WHERE busno='".$busno."';";

		if ($conn->query($sql) === TRUE) 
			{
				echo "Record deleted successfully";
			} 
		else 
			{
				echo "Error deleting record: " . $conn->error;
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
	
	
		
  
  <button type="submit" class="btn btn-default" name="remove">Remove Bus</button>
  </div>
  
</form>
	



  
  

<div class="footer">
</div>

</body>


</html>