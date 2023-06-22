<?php
session_start();
?>
<html>
<head>
<link style="text/css" href="css/1.css" rel="stylesheet">


<script type='text/javascript'>
function  formValidation()
{


        var username = document.getElementById('username');
      var password = document.getElementById('password');
	    
	 
	
		  if(isAlphanumeric( username, "Please fill your user Name ")){
		  if(lengthRestriction(username, 3, 32,"  for your user name")){
	
	     if(isAlphanumeric(password, "enter password")){  
	    if(lengthRestriction(password, 3, 32,"  for your password")){
		
			 
return true;
}}}}
				
	return false;
	
}
	
	function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max, helperMsg){
	var uinput = elem.value;
	if(uinput.length >= min && uinput.length <= max){
		return true;
	}
	else{
		alert("Please enter between " +min+ " and " +max+ "" +helperMsg);
		elem.focus();
		return false;
	}
}


function madeSelection(elem, helperMsg){
	if(elem.value ==""){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
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
<title>Cashier Page</title>
</head>

<body   bgcolor="white"  onLoad="timeimgs('1');" >
<table align="center" width=1200px height="700" border=0 >
<tr><td height=20px  colspan=3>
<img src="images/17a.jpg" width="550px" height="125px"> <image src="images/43.jpg" width="600px" height="125px">
</td>
</tr>


<td  height="30px" colspan=3 >
 <div id="dropdown">
<li><a href="index.php">
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;

Home</a></li>
<li><a href="aboutus.php">About US</a></li>
<li><a href="contactus.php">contact Us</a></li>;
<li><a href="developer.php">Developer</a></li>


<li><a href="login1.php" id="login"><b>Login</a></li>
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

<td  valign="top" align="center" bgcolor="white" border="0">
<form action="Login1.php" method="post" onsubmit='return formValidation()'>
<font face='monotype corsiva' size="5px" color='#245B4D'>Well come to login page</font>
<table valign='top' width="55%" border="1" align="center" bgcolor='#CCCCFF'>
<tr>
<td colspan='2' color="white" border="0"><img src="images/31.jpg" width="368" height="100" valign="top" align="center"></td></tr>
<tr><td width="50px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face='monotype corsiva' size='5px'><font color="red" size="6px">@</font> User Name: 
</font></td><td><input type="text" required name="username" id="username"></td></tr><br><br>
<tr><td height="5px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face='monotype corsiva' size='5px'><font color="red" size="6px">@</font>Password:
</font> </td><td><input type="password" required name="password" id="password"></td></tr><br><br> 
<tr><td height="5px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face='monotype corsiva' size='5px'><font color="red" size="6px">@</font>Position:
</font> </td><td><select name="position" id="position" required><option></option><option>manager</option>
<option>storecoordinator</option><option>pharmacist</option><option>cashier</option></select></td></tr> <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<tr><td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font face='monotype corsiva' size='5px'><input type="submit" value="Login" name="login"></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font face='monotype corsiva' size='5px'><input type="reset" value="cancel"></font></td></tr>
<?php
include('conn.php');
$dbname='pharmacy';
$conn=DBconnection($dbname);
 if(isset($_POST['login']))
 {

     $uname=$_POST['username'];
   $password =$_POST['password'];
  // $password=md5($password1);

   $position=$_POST['position'];
   $query = "SELECT * FROM account WHERE   username = '{$uname}' AND password = '{$password}' AND position = '{$position}';";
  $result_set=mysqli_query($conn,$query);
   $row=mysqli_fetch_array($result_set);
if(!$result_set){
die("query is failed".mysql_error());
}
if(mysqli_num_rows($result_set)>0)
{
if($position=="manager")
{
	//session_start();
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='manager.php';</script>";
}
else if($position=="storecoordinator")
{
//session_start();
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='storecoordinator.php';</script>";
}
else if($position=="pharmacist")
{
//session_start();
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='pharmacist.php';</script>";
}
else if($position=="cashier")
{
//session_start();
$_SESSION['accountid']=$row['accountid'];
echo "<script>window.location='cashier.php';</script>";
}
}
else
   {
	
 echo"  <font color='green'><p class='wrong'>User Name, password and Roles not match!</p></font>";
 echo' <meta content="3;login1.php" http-equiv="refresh" />';
   } 
}
mysqli_close($conn);
?>

	
	</table>
</form>
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