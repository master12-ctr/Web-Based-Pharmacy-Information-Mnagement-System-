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


        var fname = document.getElementById('fname');
      var lname = document.getElementById('lname');
	  var eid = document.getElementById('eid');
	  var sex=document.getElementById('sex');
	var age = document.getElementById('age');
	var salary = document.getElementById('salary');
	var address = document.getElementById('address');
		
	
		  if(isAlphabet( fname, "Please fill your First Name in letters only")){
		  if(lengthRestriction(fname, 3, 30,"for your first name")){
	
		if(isAlphabet(lname, "please fill your Last Name in letters only")){  
	if(lengthRestriction(lname, 3, 30,"for your last name")){


		
		 if( isNumeric( eid, "Please fill your Id in a numbered only")){
		 if(lengthRestriction(eid, 1, 5,"for your Id")){
			  if(madeSelection(sex,"please choose sex")){

		if(isNumeric(age, "please fill a numbered age only")){
	if(ageRestriction(age)){
		if(lengthRestriction(age, 2, 3,"enter valid age between 18 and 120")){

			if(isNumeric(salary, "please fill a salary in a number  only")){
	if(salaryRestriction(salary)){
		if(lengthRestriction(salary, 4, 5,"enter valid salary between 1,000 and 10,000")){
	
		
			  if( isAlphanumeric( address, "Please fill your address")){
		 if(lengthRestriction(address, 3, 30,"for your address")){
 
			 
			 return true;
}
						}}} }}} }}}} }}}}
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

function ageRestriction(elem){
    	if(elem.value<18 ||elem.value>120)
	{
	alert("enter valid age between 18 and 120");
	elem.focus();
	return false;}
	else{
  return true;
	}
}
function salaryRestriction(elem){
    	if(elem.value<1000 ||elem.value>10000)
	{
	alert("enter valid salary between 1,000 and 10,000");
	elem.focus();
	return false;}
	else{
  return true;
	}
}
function madeSelection(elem, helperMsg){
	if(elem.value =="..select.."){
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
<li><a href="manager.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Home<font color="red"></a></li>
<li><a href="#">Manage Employee<font color="red"></a>
 <ul>
	     <li><a href="regemployee.php">@@&nbsp;Register Employee</font></a></li>
		<li><a href="viewemployee.php">@@&nbsp;View Employee</font></a></li>
		<li><a href="deleteemployee.php">@@&nbsp;Delete Employee</font></a></li>
		

	  </ul></li>

<li><a href="#">
Acount Setting<font color="red"></a>
 <ul>       
	     <li><a href="viewacount.php">@@&nbsp;View Acount</font></a></li>
		<li><a href="deleteacount.php">@@&nbsp;Delete Acount</font></a></li>
		<li><a href="changepass2.php">@@&nbsp;Change Password</font></a></li>
		

	  </ul></li>

<li><a href="#">View<font color="red"></a>
 <ul>
	     <li><a href="viewsolddrug.php">@@&nbsp;Audit Money</a></li>
	<li><a href="viewcustinfo.php">@@&nbsp;Customer History</a></li>
		  <li><a href="viedrug.php">@@&nbsp;View Drug</font></a></li>
            <li><a href="viestoredrug.php">@@&nbsp;View Store Drug</font></a></li>
	  </ul></li>
	 
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

<form action="regemployee.php" method="post" name="register" onsubmit="return checkvalidation()">
<fieldset><legend align="center"> <font face='monotype corsiva' size='5px' color="red">Employee Registration Form</font></legend>
<font align="center" color="black">
<br>
<b><font size="3px">First Name:&nbsp;&nbsp;<input type="text" name="fname" id="fname"  placeholder="..first name.." size="20%"><br><br>
<b><font size="3px">&nbsp;Last Name:&nbsp;&nbsp;<input type="text" name="lname" id="lname"  placeholder="..last name.." size="20%"><br><br>
<b><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emp-Id:&nbsp;&nbsp;<input type="text" name="eid" id="eid"  placeholder="..emp-id.."size="20%"><br><br>
<b><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sex:&nbsp;&nbsp;<select id="sex" name="sex"> <option selected >..select..</option><option >Male</option>
<option>Femal</option></select><br><br>
<b><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:&nbsp;&nbsp;<input type="text" name="age" id="age"  placeholder="..age.."size="20%"><br><br>
<b><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary:&nbsp;&nbsp;<input type="text" name="salary" id="salary"  placeholder="..salary.." size="20%"><br><br>
<b><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;Address:&nbsp;&nbsp;<input type="textarea" name="address" id="address"  placeholder="..address.." size="20%"><br><br>

Position:&nbsp;&nbsp;<select id="position" name="position"> <option selected >..select..</option><option >manager</option><option >pharmacist</option>
<option>storecoordinator</option><option>cshier</option></select><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="register" name="register">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" name="cancel">
</fieldset>
</form>


<?php

if(isset($_POST['register']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$id=$_POST['eid'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$salary=$_POST['salary'];
$address=$_POST['address'];
$position=$_POST['position'];

$insert1="INSERT INTO employee values('$fname','$lname','$id','$sex','$age','$salary','$address') ";
$insert2="INSERT INTO account values('$id','$fname','$lname','$position') ";
$res=mysqli_query($conn,$insert1);
$res1=mysqli_query($conn,$insert2);
	
if(!$res && !$res1)
	{
	echo"<font color='green'><p class='wrong'>Insertion failed!!!</p></font>";
echo' <meta content="3;regemployee.php" http-equiv="refresh" />'; 
	}
	else
	{
	echo"<font color='green'><p class='right'>You have succefully registered employee and create account in to your data base!!!</p></font>";
     echo' <meta content="3;regemployee.php" http-equiv="refresh" />'; 
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