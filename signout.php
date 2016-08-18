<?php

session_unset();
session_destroy();
header("location: index.php ");
mysqli_close($conn); 

?>
    