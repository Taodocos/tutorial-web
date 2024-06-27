<?php

include_once("conn.php");
 session_start();
 //echo "validuser".$_SESSION['validuser'];
 session_destroy();
 header("location:home.html");
 {
   echo "session not set";
 }
?>