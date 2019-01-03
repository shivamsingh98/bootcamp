<?php 
session_start();
session_destroy();
echo "sucessfully logged out!";
header("Refresh:2; url=index.php");  //refresh after 2 sec
?>