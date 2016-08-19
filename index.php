 <?php
include("config.php");
 $message= "";
if($_SERVER["REQUEST_METHOD"] == "POST") {

 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $sql = "SELECT * FROM accounts WHERE username = '".$username."' and password = '".$password."'";
 
 $result = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($result); 
 if($count != 0) {
 	session_start();
    echo "the session is started";
 	$row = mysqli_fetch_assoc($result);
 	$id = $row['uid'];
 	$_SESSION["current_user"] = $username;
     $_SESSION["id"] = $id;
 	$message = "Login successful!";
     if( $username == "admin")
     {
         header("location: ./admin/admin.php");
     }
     else
     {
         header("location: ./labassist/mylab.php");
     }
 	    }else {
        	$message = "Your login name or Password is invalid";
        }
       }
?> 
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/materialize.css">
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>

<body>
  <nav>
    <div class="nav-wrapper black" >
      <a href="#" class="brand-logo"></a><!--can insert logo here-->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
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
<?php 
echo $message ; 
?></div>    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
</body>
</html>       
