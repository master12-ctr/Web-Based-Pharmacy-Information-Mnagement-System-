<?php
$id = $_REQUEST['id'];
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("pharmacy",$conn);
if(isset($_POST['edit']))
{

	$sel1= mysql_query("SELECT * FROM stockdrug WHERE bachnumber='$id' ");
  $row=mysql_fetch_array($sel1);
  $qq=$row['quantity'];

  $sel= mysql_query("SELECT * FROM solddrug WHERE sellnumber='$id' ");
  $fetch=mysql_fetch_array($sel);
  $q=$fetch['quantity'];
  
 
  $qqq=$qq-$q;
  $up=mysql_query("UPDATE stockdrug set quantity='{$qqq}' where bachnumber='{$id}'");
  $up1=mysql_query("UPDATE solddrug SET status='true' WHERE sellnumber = '$id' ");

  if($up && $up1)
	  {
	  echo "YES";
	  echo '<meta content="2;print.php" http-equiv="refresh"/>';
  
  }

  //header('Location: notification.php');
  }

mysql_close($conn);
?>
