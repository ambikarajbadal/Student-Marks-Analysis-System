<?php 
mysql_connect('localhost', 'root', '123');
mysql_select_db('mydatabase');
$sql="select * from studentdetails";
$records=mysql_query($sql);
?>
<html>
<head>
<title>Student Info</title>
</head>
<div id="a1" style="left:273px; top:435px; background-color:#FFF">
<body bgcolor="red">
<center><tr></tr><table width="1200" border="1" cellpadding="1" cellspacing="1"></tr>

<th>Id:</th>
<th>User Name:</th>
<th>Password:</th>
<th>Name:</th>
<th>Gender:</th>
<th>D.O.B:</th>
<th>Blood Gr.:</th>
<th>Father's Name:</th>
<th>Mother' Name:</th>
<th>Address:</th>
<th>City:</th>
<th>State:</th>
<th>Phone Number:</th>
<th>Email Id:</th>
</center>
<?php
while($employee=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$employee['id']."</td>";
echo "<td>".$employee['uname']."</td>";
echo "<td>".$employee['password']."</td>";
echo "<td>".$employee['name']."</td>";
echo "<td>".$employee['gender']."</td>";
echo "<td>".$employee['dob']."</td>";
echo "<td>".$employee['bg']."</td>";
echo "<td>".$employee['fname']."</td>";
echo "<td>".$employee['mname']."</td>";
echo "<td>".$employee['address']."</td>";
echo "<td>".$employee['city']."</td>";
echo "<td>".$employee['state']."</td>";
echo "<td>".$employee['phoneno']."</td>";
echo "<td>".$employee['email']."</td>";
echo "</tr>";
}

?>
</table>
</body>
</html>