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

		var customerid = document.getElementById('cid');
           var dname = document.getElementById('dname');
	    var quantity = document.getElementById('quantity');
	    
		if(isNumeric( customerid, "Please fill customer id in numbered only")){
		  if(lengthRestriction(customerid, 1, 20,"for the customer id")){

		  		if(madeSelection(dname,"please choose drug name")){
			  
			 if(isNumeric( quantity, "Please fill quantity in numbered only")){

		  if(lengthRestriction(quantity, 1, 20,"for the quanity")){

			  
			 return true;

						}}} }} 
	return false;
	
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




function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
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
<td align="center" valign="top" bgcolor="white">
<form action="sale.php" method="post" name="sale" onsubmit="return checkvalidation()"><br>
<fieldset><legend align="center"> <font face='monotype corsiva' size='5px' color="red">Selling Drug Form</font></legend><br>

<b>Customer Id:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cid" id="cid" size="10%"><br><br>

<?php


$resu="SELECT drugname FROM stockdrug";
$result=mysqli_query($conn,$resu);
 echo '<label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drug Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>';
 echo '<select id="dname" name="drugname">';
echo '<option value=""></option>';
while ($row = mysqli_fetch_assoc($result)) 
{
$vaa = $row['drugname']; 
echo "<option value='$vaa'>$vaa</option>";
}
echo '</select>';

echo"<br>";
echo"<br>";


?>
<b>Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity" id="quantity"  placeholder="..quantity.."size="10%"><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Sale" name="Sell">
&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" name="display">
</fieldset>
</form>


<?php
if(isset($_POST['Sell']))
{
$custid=$_POST['cid'];
$dname=$_POST['drugname'];
$quantity=$_POST['quantity'];

$sa="select * from stockdrug where drugname='{$dname}'";
$s=mysqli_query($conn,$sa) or die(mysqli_error($conn));
$row = mysqli_fetch_array($s);
$bachnum=$row['bachnumber'];
$price=$row['unitprice'];
$quan=$row['quantity'];
if($quan >=$quantity)
	{
$quan1 = $quan - $quantity;
$resu="INSERT INTO solddrug values('','$accountid','$custid','$bachnum','$quantity',now(),'false', 'No') ";
$res=mysqli_query($conn,$resu);
$upd="UPDATE stockdrug SET quantity='$quan1' WHERE bachnumber='$bachnum' ";
$update=mysqli_query($conn,$upd);
//is statement must be
if($quan1 ==50)
	{
   $resul="DELETE from stockdrug WHERE bachnumber= '$bachnum' ";
   $res=mysqli_query($conn,$resul);
}
if(!$res)
        { 
	echo"<font color='green'><p class='wrong'>Insertion failed!!!</p></font>";
echo' <meta content="3;sale.php" http-equiv="refresh" />';
	}
	else 
	{

echo"<font color='green'><p class='right'>You have succefully post drug in to your data base!!!</p></font>";
echo' <meta content="3=;sale.php" http-equiv="refresh" />'; 
	}
	}
else
	{
	?>
	<script>
	alert("The Drug Quantity You entered is above the limit. Please decrease the amount!");
	
	</script>
	<?php
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