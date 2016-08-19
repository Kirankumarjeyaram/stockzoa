<?php

session_start();
if( $_SESSION["current_user"] != "admin" )
{
    die("Access denied. Please go back to the original page");
}

echo $_SESSION["id"];

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/materialize.css">
<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
</head>

<body>
  <nav>
    <div class="nav-wrapper black" >
      <a href="#" class="brand-logo"></a><!--can insert logo here-->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">Labs</a></li>
        <li><a href="">Requests</a></li>
        <li><a href="">Stock</a></li>
        <li><a href="">Accounts</a></li>
        <li><a href="../signout.php">Signout</a></li>
      </ul>
    </div>
  </nav>
<script type="text/javascript" src="../js/materialize.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
</body>
</html>  

