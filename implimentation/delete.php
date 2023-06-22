<?php
include('conn.php');
$dbname='pharmacy';
$conn=DBconnection($dbname);
$id = $_REQUEST['id'];
   $delete1="DELETE FROM stockdrug WHERE bachnumber='$id' ";
  $delete2="DELETE FROM storedrug WHERE bachnumber='$id' ";
$result=mysqli_query($conn,$delete1);
$result1=mysqli_query($conn,$delete2);
if($result){
  echo "delete succesfully";
}else
{
 echo "failed to delete";
}
   header('Location: expired.php');

mysqli_close($conn);
?>
