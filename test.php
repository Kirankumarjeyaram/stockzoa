 <?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

 
 $sql = "SELECT id FROM Accounts WHERE username = 'admin123' and password = 'admin222'";
 
 $result = mysqli_query($conn,$sql);
 
 $count  = mysqli_num_rows($result);
 
 echo $count;
 
if($result){
	echo "result is executed";
} 
else {
	echo "error".mysqli.error();
}
 if($result) {
 	session_register("username");
 	$_SESSION['current_user'] = $username;
 	$_SESSION['admin'] = $admin;
 	$_SESSION['aklab'] = $aklab;
 	$message = "Login successful!";
 	//header("location: dashboard.php ");
        }else {
        	$message = "Your login name or Password is invalid";
        }

echo '$message';        
  }
session_unset();
session_destroy();	
?> 
<!--<html>
<head>
<link rel="stylesheet" type="text/css" href="materialize.css">
<link rel="stylesheet" type="text/css" href="materialize.min.css">
</head>

<body>
  <nav>
    <div class="nav-wrapper black" >
      <a href="#" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">Lab</a></li>
        <li><a href="#">Sign out</a></li>
      </ul>
    </div>
  </nav>
        <br><br><br><br><br><br><br>
	<div class="row">
		<div class="col s7 push-s4 ">
 		<div class="row">
     <div class="col s12 m8">
     	<div class="card transparent">
      	<div class="card-content black-text">
  			<div class="row">
    			<form class="col s12" action="" method="post">
      			<div class="row">
        			<div class="input-field col s6">
				<label for="username">User Name:</label>
          			<input name="username" type="text" class="validate">
        			</div>
      			</div>
      			<div class="row">
        			<div class="input-field col s6">
				<label for="password">Password:</label>
          			<input name="password" type="password" class="validate">
        			</div>
      			</div>
				<br>
				<div class="row">
      				<div class="col s7 push-s4">
				<button class="btn waves-effect waves-ripple" type="submit" name="action"><input type="submit" value= "LOGIN"/></button>
				</div>
 				</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>    
</div>
<?php echo $message; ?></div>    
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="materialize.js"></script>
</body>
</html>       -->
