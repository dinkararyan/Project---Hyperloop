 <?php
	session_start();
	 
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "project";
	// Create connection
	


	$conn = new mysqli($hostname, $username, $password, $dbname);
		if($conn->connect_error){
			echo "NOT connected";
					die("connection failed:" .$conn->connect_error);}
					
					
					
					
	$usernameErr = $emailErr = $passwordErr = $phoneErr ="";
	$username = $email = $password= $phone= "";
					
	if(isset($_POST["register"])){
					
					
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
		
		
		
		
		

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$username)) {
      $usernameErr = "Only letters ,numbers and white allowed"; 
    }
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
	
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
      $passwordErr = "Only letters ,numbers and white space allowed"; 
    }
  }
   
	if(empty($_POST["phone"])) {
		$phoneErr = "Phone Number is Required";
	}	else{
		$phone= test_input($_POST["phone"]);
	// check if only digits are entered
	if(!preg_match("/^[0-9]*$/",$phone)) {
		$phoneErr = "Only digits are accepted";
	}
	}
	
	$country=$_POST['country'];
			
}


	
	if(!empty($username && $password && $email && $phone)){
		$password=md5($password);
	$sqlinsert="INSERT INTO users (username, password, email, phone, country) VALUES ('$username','$password','$email','$phone','$country');";
	mysqli_query($conn,$sqlinsert);
	$_SESSION['success']  = "New user successfully created!!";
			header('location: login.php');
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

input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
input[type=integer], select {
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
    float: left;
    width: 75%;
	
}

/* Right column */
.rightcolumn {
    float: right;
    width: 22%;
	
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

<div class="row" >
  <div class="leftcolumn" style="background-image:url('http://wkwedding.co/wp-content/uploads/2018/02/pages-background-color-with-8-how-to-change-background-color-in-html-page-coloring-pages-of-pages-background-color-1.jpg');">
    <div class="card">
      <h2>Registration</h2>
	  <div>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	<span class="error">* <?php echo $usernameErr;?></span>
    <label for="Username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username">
	
	
	
	<span class="error">* <?php echo $passwordErr;?></span>
	<label for="Password">Password</label>
	<input type="Password" name="password" placeholder="Password">
	
	
	<span class="error">* <?php echo $emailErr;?></span>
	<label for="Email">Email</label>
	<input type="email" id="email" name="email" placeholder="@email.com">
	
	<span class="error">* <?php echo $phoneErr;?></span>
	<label for="Phone">Phone Number</label>
	<input type="integer" name="phone" placeholder="Phone Number" pattern=".{10,10}" required title="10 digit phone number">
	
	
	<label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
	  <option value="India">India</India>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Register" name="register">
  </form>
</div>
    </div>
	</div>
   <div class="rightcolumn" style="background-image:url('http://wkwedding.co/wp-content/uploads/2018/02/pages-background-color-with-8-how-to-change-background-color-in-html-page-coloring-pages-of-pages-background-color-1.jpg');">

    <div class="card">
		<h2>Already an User</h2>
      <h3>Login</h3>
     <div class="card">
	 <form action="http://localhost/project/login.php">
	
	 
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