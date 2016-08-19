<?php

session_start();

$lab = $_SESSION["current_user"];

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/materialize.css">
<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <style>
    
    
    </style>
</head>

<body>
  <nav>
    <div class="nav-wrapper black" >
      <a href="#" class="brand-logo"></a><!--can insert logo here-->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="mylab.php">My Lab</a></li>
        <li><a href="myrequest.php">My Request</a></li>
        <li><a href="../signout.php">Signout</a></li>
      </ul>
    </div>
  </nav>
    <div class = "container">
    <a class="waves-effect waves-light btn" href="">Request for replacement</a>
    <a class="waves-effect waves-light btn">Request for service</a>
    </div>
    
    <div class = "table">
    <?php
        
        echo $lab;
    ?>
        
    
    </div>
    
    
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>
</body>
</html>       