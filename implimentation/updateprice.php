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

<script type='text/javascript'>
function checkvalidation()
{


        var bnumber = document.getElementById('bnumber');
        var uprice = document.getElementById('uprice');
	   
		  if(isNumeric( bnumber, "Please fill bach number in numbers only")){
		  if(lengthRestriction(bnumber, 1, 30,"for bach number")){

			  if( isNumeric( uprice, "Please fill price in numbers only")){
		 if(lengthRestriction(uprice, 1, 30,"for the unit price")){
			 
			 return true;

						}}} }
	return false;
	
}
	
  
  
function isAlphabet(elem, helperMsg)
	{
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else
		{
		alert(helperMsg);
		elem.focus();
		return false;
	}} 


function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}



function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9,-,/]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
</script>

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
<form action="updateprice.php" method="post" name="add" onsubmit="return checkvalidation()">
<fieldset><legend align="center"> <font face='monotype corsiva' size='5px' color="red">Updating the unit price Form</font></legend>&nbsp;<br><br>
<font align="center" color="black">

<b><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bach Number:&nbsp;&nbsp;<input type="text" name="bnumber" id="bnumber"  placeholder="...." size="20%">&nbsp;&nbsp;<br><br>
<b><font size="3px">Enter New Price:&nbsp;&nbsp;<input type="text" name="uprice" id="uprice"  placeholder="...." size="20%">&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Update" name="add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" name="cancel">
</fieldset>
</form>

<?php

if(isset($_POST['add']))
  {
   $bnumber=$_POST['bnumber'];
  $uprice=$_POST['uprice'];
  
$resu="SELECT * FROM stockdrug where bachnumber='{$bnumber}' ";
$result=mysqli_query($conn,$resu);
$row=mysqli_fetch_array($result);
$price=$row['unitprice'];
$bn=$row['bachnumber'];
if($bnumber == $bn)
	{
$price = $uprice;
$upda="UPDATE stockdrug SET unitprice='$price' WHERE bachnumber='$bnumber' ";
$update=mysqli_query($conn,$upda);
if(!$update)
	{
echo"<font color='green'><p class='wrong'>Update price failed!!!</p></font>";
echo' <meta content="3;updateprice.php" http-equiv="refresh" />';
	} 
	else
	{

echo"<font color='green'><p class='right'>You have succefully update price !!!</p></font>";
//echo' <meta content="3;addprice.php" http-equiv="refresh" />'; 
	}
   }else{
echo"<font color='green'><p class='wrong'>please insert correct Bath number!!!</p></font>";
echo' <meta content="3;updateprice.php" http-equiv="refresh" />';
}
  }
mysqli_close($conn);
	?>
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