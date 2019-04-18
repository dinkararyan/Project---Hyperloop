<?php
	 
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "project";
	// Create connection
	


	$conn = new mysqli($hostname, $username, $password, $dbname);
		if($conn->connect_error){
			echo "NOT connected";
					die("connection failed:" .$conn->connect_error);}
					


				
	$usernameErr = $passwordErr = "";
	$username = $password= "";
	
	if(isset($_POST["login"]))
	{
		 	
	    if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {
	       if (empty($_POST["username"]))
		   {
				$usernameErr = "Username is required";
		   } 
  
           if (empty($_POST["password"])) 
		   {
			   $passwordErr = "Password is required";
		   }
	    
			else if(!empty($_POST["username"]) && !empty($_POST["password"]))
			{
				$user=$_POST['username'];  
				$pass=$_POST['password'];
				$psss=md5($pass);
	
				$query=mysqli_query($conn,"SELECT * FROM users WHERE username='".$user."' AND password='".$pass."' LIMIT 1");  
				$numrows=mysqli_num_rows($query);  
				if($numrows!=0)  
				{  
					session_start();
					$_SESSION['username']=$user;

					/* Redirect browser */  
					header("Location: timeline.php");  
				}  
			
				else
				{
					$usernameErr ="Username/Password not Valid";
				}
			}
		
		}
	}




	




?>








<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<style>
	
* {
    box-sizing: border-box;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 10px;
    text-align: center;
    color:black;
}

.header h1 {
    font-size: 40px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #211f22;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}


/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: center;
    width: 40%;
	
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: lightblue;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    margin-top: 20px;
	color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
.error {
	font-size:12px;
	color: #FF0000;
	}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}


</style>
</head>
<body style="background-image:url('https://www.walldevil.com/wallpapers/a44/wallpaper-background-web-fractal21-wallpapers-3dfiction-images.jpg');">

<div class="header" style="background-image:url('https://sebastianbourges.com/wp-content/uploads/2013/12/panorama-005.jpg');">
  <h1><i>Hyperloop</i></h1>
  <h4><i>A BUS TICKET BOOKING SYSTEM</i></h4>

</div>

<div class="topnav" >
	
  <a href="http://localhost/project/register.php">Hyperloop</a>
  <a href="#">About Us</a>
  <a href="#">Contact Us</a>
  <a href="adminlog.php" style="float:right">Admin Login</a>
</div>
<div class="row" ">
  <div class="leftcolumn" >
    <div class="card">
	<h3>Login Here!</h3>
	<div class="card">
	 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	 <span class="error">* <?php echo $usernameErr;?></span>
	 <label for="Username">Username</label>
	 <input type="text" name="username" placeholder="Username">
	 
	 <span class="error">* <?php echo $passwordErr;?></span>
	 <label for="Password">Password</label>
	 <input type="Password" name="password" placeholder="Password">
	 
	 <input type="submit" value="Login" name="login" >
	 </form>
	  </div>
  </div>
  </div>
</div>

	
<div class="footer">
</div>

</body>
</html>	

	

