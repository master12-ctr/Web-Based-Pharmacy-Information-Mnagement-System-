<?php   
 session_start();
include("conn.php");
?>

<?php
if(isset($_POST['create']))
{
$position=$_POST['position'];
$acid=$_POST['acid'];
$uname=$_POST['uname'];
$password=$_POST['pass'];

$sql="INSERT INTO account (position,acc-id,user-name, password)
VALUES
('{$position}','{$acid}','{$uname}','{$password}') ";

if (!mysql_query($sql,$conn))
  {
  die('Error while creating!!!: ' . mysql_error());
  }
  echo"<script>alert('Your are successfully create account!!')</script>";
}
mysql_close($conn);
?>