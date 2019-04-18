<?php
	$hostname="localhost";
	$username="root";
	$password="root";
	$dbname="project";
	
	$conn= new mysqli( $hostname , $username , $password , $dbname);
	if($conn->connect_error)
	{
		echo "connection failed";
			die("connected failed:" .$conn->connect_error);}
			
			
			session_start();
			$username=$_SESSION['username'];
			//$busno=$_POST["busno"];
			
			if(isset($_POST["book"]))
			
			{
			
			$busno=$_POST['busno'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$date=$_POST['date'];
			$bookid=mt_rand();
			
			$_SESSION['busno']=$busno;
			$_SESSION['name']=$name;
			$_SESSION['email']=$email;
			$_SESSION['phone']=$phone;
			$_SESSION['bookid']=$bookid;
			
			
			//header('location: payment.php');
			 $sql="INSERT INTO booking (username, busno, bookid, name, phone, email) VALUES ('$username','$busno','$bookid','$name','$phone','$email');";
			
			
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
				header('location:printticket.php');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
					}
			}
 
?>
<html>


<head>
<title>Booking Form</title>

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
		
			<label for="Busno" style="font-size:18px;">Busno:</label>
			<input type="text" name="busno" id="busno" placeholder="Busno" ><br><br> 
		
			<label for="Name" style="font-size:18px;">Name:</label>
			<input type="text" name="name" id="name" placeholder="Name" ><br><br>
			
			<label for="Email" style="font-size:18px;">Email:</label>
			<input type="email" name="email" id="email" placeholder="Email"><br><br>
			
			<label for="phnumber" style="font-size:18px;">Phone Number:</label>
			<input type="integer" name="phone" id="phone" placeholder="Phone Number" pattern=".{10,10}" required title="10 digit phone number"><br><br>
			
			<label for="date" style="font-size:18px;">Date:</label>
			<input type="date" name="date" id="date" placeholder="date"><br><br>
			
			<input type="submit" name="book" value="BOOK TICKET" style="font-size:18px;" class="btn btn-default">
			
		</form>
	</div>
</div>
			
			
	
	
	
	
<div class="footer">
</div>
	
	
	
	
	
	
	
	
	
	
	

</body>
</html>