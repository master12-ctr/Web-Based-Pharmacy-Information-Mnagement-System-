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
<title>Cashier Page</title>
</head>

<body   bgcolor="white"  onLoad="timeimgs('1');" >
<table align="center" width=1200px height="700" border=0 >
<tr><td height=20px  colspan=3>
<img src="images/17a.jpg" width="550px" height="125px"> <image src="images/43.jpg" width="600px" height="125px">
</tr>


<td  height="30px" colspan=3 >
 <div id="dropdown">
 <li><a href="pharmacist.php">
 &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
	 
	 Home</a></li>

	 <li><a href="#">Manage Customer<font color="red"></a>
 <ul>
	     <li><a href="regcustomer.php">@@&nbsp;Register Customer</font></a></li>
		<li><a href="searchcustomer.php">@@&nbsp;Search Customer</font></a></li>
	<li><a href="viewcustomer.php">@@&nbsp;View Customer</font></a></li>
	

	  </ul></li>

  <li><a href="checkdrug.php">Check Item<font color="red"></a></li>
<li><a href="sale.php">Sale Drug<font color="red"></a></li>
 
	 
	<li><a href="changepass3.php">Change Password<font color="red"></a></li>
	
	 <li><a href="logout.php" id="logout"><b>Logout</b></a></li>
	
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
<td  valign="top" bgcolor="white" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#7530C0"><center><h2>
<marquee behavior="alternate">Zemenay pharmacy</marquee></h2></center></font>
<p><table align="center">
<td align="center"><img src="images/48.jpg" width="400px" height="150px"></td></tr>
<tr><td><p style="text-align:justify"><br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Zemenay pharmacy which is found in Injibara town was established in 2011 EC. 
Now it gives an honourable  service for the society. Supply and demand of Zemenay pharmacy is based on market needs. 
The Employee uses the manual system in order to manage the overall activity of the pharmacy. Today with the growth of 
population number, our world is facing serious problems. </p>

</td></tr>
<tr>
<td colspan="2"><p style="text-align:justify"><br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Many organizations are in trouble to accommodate these large numbers of people
according to their needs. Many problems in the organizations are associated with the increasing number of customers
and way of helping them. Currently, all activities of pharmacy system are going on manually, which lead to wastage 
of time, labour, accuracy, and speed. Pharmacy System is the backbone of the medical health sector.
 </p></td></tr>
<tr><td colspan="2"><p style="text-align:justify">
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hence Pharmacy management system is a management system that is designed to improve accuracy and to enhance the performance of 
the task in the pharmacy. It is a computer based system which helps to the employee inside the pharmacy to facilitate the activity 
of the pharmacy in a manner way.  </p>
</tr>

<tr><td colspan="2"><p style="text-align:justify">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At present manual system is being utilized in the pharmacy. It requires the pharmacist to manually monitor 
each drug that is available in the pharmacy. This usually leads to mistakes as the workload of the pharmacist increases.  </p>
</tr></td>
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