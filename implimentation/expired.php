<?php
	include("conn.php");  
$dbname='pharmacy';
$conn=DBconnection($dbname);
 session_start();
if(isset($_SESSION['accountid']))
 {
  $user_id=$_SESSION['accountid'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login1.php');
 </script>
 <?php
 }
 ?>
 <?php
			//include('conn.php');
			//session_start();

			//mag show sang information sang user nga nag login
			$user_id=$_SESSION['accountid'];

			$query="select * from account where accountid='$user_id'"or die(mysql_error);

                         $result_set=mysqli_query($conn,$query);
                         $row=mysqli_fetch_array($result_set);

            $accountid=$row['accountid'];
			$username=$row['username'];
			$password=$row['password'];
			
			?>

<html>
<head>
<link style="text/css" href="css/1.css" rel="stylesheet">


<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/37.jpg"
demo2 = new Image();
demo2.src="images/47.jpg"
demo3 = new Image();
demo3.src="images/41.jpg"


demo4 = new Image();
demo4.src="images/42.jpg"
demo5 = new Image();
demo5.src="images/45.jpg" 
demo6 = new Image();
demo6.src="images/34.jpg"
demo7 = new Image();
demo7.src="images/35.jpg" 

}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>
<title>Home</title>
<link style="text/css" href="s.css" rel="stylesheet">
</head>

<body   bgcolor="white"  onLoad="timeimgs('1');" >
<table align="center" width=1200px height="700" border=0 >
<tr><td height=20px  colspan=3>
<img src="images/17a.jpg" width="550px" height="125px"> <image src="images/43.jpg" width="600px" height="125px">
</tr>

<td  height="30px" colspan=3 >
 <div id="dropdown">
 
 <li><a href="storecoordinator.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Home<font color="red"></a></li>
 <li><a href="#">Manage Drug<font color="red"></a>
 <ul>
  <li><a href="registerdrug.php">@@&nbsp;Register Drug</font></a></li>
	     <li><a href="viewdrug.php">@@&nbsp;View stock Drug</font></a></li>
<li><a href="viewstoredrug.php">@@&nbsp;View Store Drug</font></a></li>
         <li><a href="adddrug.php">@@&nbsp;Add Drug</font></a></li>
		  <li><a href="updateprice.php">@@&nbsp;Update Price</font></a></li>
		
	  </ul></li>
 <li><a href="expired.php">Check-Expired-Date</a></li>
	<li><a href="changepass1.php">Change Password</a></li>
	 
	
	 <li><a href="logout.php" id="logout"><b>Logout</a></li>
</div>
</td>
</tr>


<tr>
<td  height=500px width=150px  valign=top border="0" bgcolor="blueblack" >
<table border="0"  width="200" height="400" class="menu-bar" align="center">
<tr >
<td width="230" height="350" bgcolor="blueblack" ><font color="black" face="monotype corsiva" size="3">
<h2 align="center">WDU-ZPIMS </h2><img src="images/17m.jpg" width="230" height="380" align='left'>

<font valign="top" color="black" face="monotype corsiva" size="3"><h2 valign="top">&nbsp;&nbsp;&nbsp;You can see the user manual by clicking the 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help link!!</h2></font>
<a href="user-manual.pdf" target="self">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Help</font></a>&nbsp;&nbsp;&nbsp;
</td>
</tr>
 <tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td align="center" valign="top" bgcolor="white">
<table border="0px" bgcolor="white" width='420' height="300" align="center">
<tr><th bgcolor=#FFFFFF height="30px" width='80' colspan='2' align="center"><b><font face="monotype corsiva" size="5" color="red">Expired Drug List in the stock</font></b></th></tr>
<td border=1 align="center" valign="top" height="300"  width="80"style="border-bottom:1px solid #f6b45f;margin-top:0.5%;">

<?php
$result ="SELECT * FROM stockdrug where  stockdrug.expirydate >= DATE(now()) AND stockdrug.expirydate <= DATE_ADD(DATE(now()), INTERVAL 4 WEEK)";
//$resul ="SELECT * FROM storedrug where  drug.expirydate >= DATE(now()) AND drug.expirydate <= DATE_ADD(DATE(now()), INTERVAL 4 WEEK)";
$res=mysqli_query($conn,$result);
//$re=mysqli_query($conn,$resul);
if(mysqli_num_rows($res)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<tr>";
echo"<th height='40'><font color='red'>Drug-&nbsp;Name</font></th>";
echo"<th height='40'><font color='red'>Company-&nbsp;Name</font></th>";
echo"<th height='40'><font color='red'>Bach-&nbsp;Number</font></th>";
echo"<th height='40'><font color='red'>Quantity</font></th>";
echo"<th height='40'><font color='red'>Unit-&nbsp;Price</font></th>"; 
echo"<th height='40'><font color='red'>Shelf-&nbsp;Number</font></th>";
echo"<th height='40'><font color='red'>Expiry-&nbsp;Date</font></th>";
echo"<th height='40'><font color='black'>Delete</font></th>";

echo"</tr>";

while($row = mysqli_fetch_array($res))
  {
  echo "<tr>";
 
echo "<td>" . $row['drugname'] . "</td>";
echo "<td>" . $row['companyname'] . "</td>";
echo "<td>" . $row['bachnumber'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>"; 
echo "<td>" . $row['unitprice'] . "</td>";
echo "<td>" . $row['shelfnumber'] . "</td>";
echo"<td>" . $row['expirydate'] . "</td>";
echo"<td>&nbsp;&nbsp;<a href=delete.php?id=".$row['bachnumber']."><font size='4px'><input type='submit' value='X' name='submit'></font></a></td>";
//echo"</tr>";
  }
  
//echo "</table>";
}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">expired drug not found in the stock!!</font>'; 
   echo '</center>';
   }  
$resul ="SELECT * FROM storedrug where  storedrug.expirydate >= DATE(now()) AND storedrug.expirydate <= DATE_ADD(DATE(now()), INTERVAL 4 WEEK)";
$re=mysqli_query($conn,$resul);
if(mysqli_num_rows($re)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<tr>";
echo"<th height='40'><font color='red'>Drug-&nbsp;Name</font></th>";
echo"<th height='40'><font color='red'>Company-&nbsp;Name</font></th>";
echo"<th height='40'><font color='red'>Bach-&nbsp;Number</font></th>";
echo"<th height='40'><font color='red'>Quantity</font></th>";
echo"<th height='40'><font color='red'>Unit-&nbsp;Price</font></th>"; 
echo"<th height='40'><font color='red'>Expiry-&nbsp;Date</font></th>";
echo"<th height='40'><font color='red'>Drug-&nbsp;Description</font></th>";
echo"<th height='40'><font color='black'>Delete</font></th>";

//echo"</tr>";
while($row = mysqli_fetch_array($re))
  {
  echo "<tr>";
 
echo "<td>" . $row['drugname'] . "</td>";
echo "<td>" . $row['companyname'] . "</td>";
echo "<td>" . $row['bachnumber'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>"; 
echo "<td>" . $row['unitprice'] . "</td>";
echo"<td>" . $row['expirydate'] . "</td>";
echo "<td>" . $rowdrug_description. "</td>";
echo"<td>&nbsp;&nbsp;<a href=delete.php?id=".$row['bachnumber']."><font size='4px'><input type='submit' value='X' name='submit'></font></a></td>";
echo"</tr>";
  }
   echo '<font face="monotype corsiva" size="5"color="red">expired drug list in the store</font>';
echo "</table>";
}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">expired drug not found in the stock!!</font>'; 
   echo '</center>';
   }



mysqli_close($conn);
?>
</td>
</table>
</td>

<td width=150px bgcolor="blueblack" height=500>
<table border=0 width=200px height=400px>
<tr>
<td border="0" height="400" width="225" bgcolor="blueblack">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" face="monotype corsiva" size="6">
<?php
echo(Date(" F d,Y"));
?>
<img src="" height="320" width="250" name="demo" >
<font face="French Script MT" size="5" color="black"><b>&nbsp;&nbsp;Zemenay pharmacy Works<br> &nbsp;&nbsp;&nbsp;&nbsp;For giving service for the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;society!!!</b></font><br><br>
<font face="Times New Roman" size="4" color="black">The pharmacy plays a greate role in stisfying the need of the society &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for Injibara city. 
<br><br><br><br><br>
</td>
</tr>
<tr>


</td>
</tr>
</table>

</td>
</tr>
<tr>
<td colspan=3>

<table align="center"><tr><td color=#047B5A><font face="Times New Roman" color="blueblack" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy Sys 2022. Copyright All Rights Reserved
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>