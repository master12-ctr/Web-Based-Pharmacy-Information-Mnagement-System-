<?php
function DBconnection($DBname)
{
$con = mysqli_connect("localhost:3306", "root", "", $DBname);
if(mysqli_connect_errno()){
echo "Connection failed: " . mysqli_connect_error();
}
return $con;
}
?>