<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "project";

	$conn = new mysqli($hostname,$username,$password,$dbname);
	if($conn->connect_error){
		echo "Connection not established";
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
	
				$query=mysqli_query($conn,"SELECT * FROM admin WHERE Username='".$user."' AND Password='".$pass."'");  
				$numrows=mysqli_num_rows($query);  
				if($numrows!=0)  
				{  
					session_start();
					$_SESSION['username']=$user;

					/* Redirect browser */  
					header("Location: adminopt.php");  
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
      <a class="navbar-brand" href="timeline.php">Hyperloop</a>
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
  
	<span class="error">* <?php echo $usernameErr;?></span>
	<label for="username" style="color:white;">Username:</label>
    <input type="text" name="username" id="username" size="20"><br><br>
	
  <div class="form-group">
	<span class="error">* <?php echo $passwordErr;?></span>
    <label for="password"><font color="white" >Password:</font></label>
    <input type="password" name="password" id="password" size="20">
  </div>
  
  
  <button type="submit" class="btn btn-default" name="login">Login</button>
</form>
	



  
  

<div class="footer">
</div>

</body>
</html>

	