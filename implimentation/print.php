<?php
include('conn.php');
$dbname='pharmacy';
$conn=DBconnection($dbname);
if(isset($_POST['search']))
  {
   $custid=$_POST['cid'];	
$resul="SELECT * FROM solddrug where customerid='{$custid}'  AND status='false'";
$result=mysqli_query($conn,$resul);
if(mysqli_num_rows($result)>0)
	{
echo"&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<br><br>";

echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Zemenay pharmacy</font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Location: Injibara</font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Address: Phone:+251918217792 & +251934516592 Imail:Zemenaypharm@hotmail.com  </font></td></tr>";
echo"<tr>";
echo"<br><br>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Name-&nbsp;Of-&nbsp;customer</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Drug-&nbsp;Name</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Company-&nbsp;Name</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Quantity</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Unit-&nbsp;Price</font></td>";
echo"</tr>";
$total = 0;
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  $bach=$row['bachnumber'];
  $bac="select * from stockdrug where bachnumber='{$bach}'";
$bach=mysqli_query($conn,$bac);
  $col=mysqli_fetch_array($bach);

  $cust=$row['customerid'];
  $ci="select * from customer where customerid='{$cust}'";
$cid=mysqli_query($conn,$ci);
  $r=mysqli_fetch_array($cid);
 
$ab=$r['firstname'].' '.$r['midlename'].' '.$r['lastname'];
 
echo "<td>";echo $ab ; echo "</td>";

echo "<td>" . $col['drugname'] . "</td>";
 echo "<td>" . $col['companyname'] . "</td>";
 echo "<td>" . $row['quantity'] . "</td>";
 echo "<td>" . $col['unitprice'] . "</td>";
 
	$total = $total + ($row['quantity'] * $col['unitprice']);
	
  $up="UPDATE solddrug SET status='true' WHERE customerid = '$custid' ";
$up1=mysqli_query($conn,$up);
 
  echo "</tr>";
  }
	
  echo"<br>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<font face='monotype corsiva' size='5' color='red'>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo" <input type='button' value='Print Page' Onclick='window.print()' align='center' style='margin-center:-420px'/></font>";
echo"<br><br>";

echo "</table><br>";
	
echo "<div style='padding-left:3em'><font size='4px' align='center'>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<font color='black'>Total Price</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' value= $total readonly size=5>";
	
	}
  else
	{
   echo '<center>';
  echo '<font face="monotype corsiva" size="6"color="red">Such id is already searched!!</font>'; 
  
   echo '</center>';
   }
  }
  
mysqli_close($conn);
?>
