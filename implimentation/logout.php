<?php
 session_start();
// echo "validuser".$_SESSION['validuser'];
 session_unset();
 session_destroy();
 echo "<script>window.location='login1.php';</script>";
 {
   echo "session not set";
 }
?>