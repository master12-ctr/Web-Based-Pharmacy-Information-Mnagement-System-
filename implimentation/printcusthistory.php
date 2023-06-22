<?php
include('conn.php');
$dbname='pharmacy';
$conn=DBconnection($dbname);
if(isset($_POST['search']))
  {
   $sex=$_POST['sex'];
  
$custh="SELECT * FROM customer where sex='{$sex}' ";
$result=mysqli_query($conn,$custh);

if(mysqli_num_rows($result)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center' border='1'><font color=white>";
echo"<br>";
echo"<tr align='center'><td colspan='9' align='center' bgcolor='white'><img src='images/01.jpg' width='650' height='70'></font></td></tr>";
echo"<tr align='center'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Zemenay pharmacy</font></td></tr>";

echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Location: Injibara</font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Address: Phone:0918217792 Imail:Zemenaypharm@hotmail.com  </font></td></tr>";

echo"<tr>";
echo"<td height='40' bgcolor='white'><font color='red'>Numbers</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>First-Name</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Middle-&nbsp;Name</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Last-&nbsp;Name</font></td>";

echo"<td height='40' bgcolor='white'><font color='red'>Age</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Sex</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Region</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Wereda</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Kebele</font></td>";

echo"</tr>";
$i=1;
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo"<td>" .$i . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['midlename'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
 echo "<td>" . $row['sex'] . "</td>";
 echo "<td>" . $row['region'] . "</td>";
 echo "<td>" . $row['wereda'] . "</td>";
 echo "<td>" . $row['kebele'] . "</td>";
 $i++;
  echo "</tr>";
  } 

  echo"</table>";
  echo"<br>";
   echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<font face='monotype corsiva' size='5' color='red'>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo" <input type='button' value='Print Page' Onclick='window.print()' align='center' style='margin-center:-420px'/></font>";
echo"<br><br>";
  }
 
else
	{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">No information found !!</font>'; 
  
   echo '</center>';

}
  }
  
mysqli_close($conn);
?>