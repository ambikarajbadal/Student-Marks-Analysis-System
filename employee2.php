<?php 
mysql_connect('localhost', 'root', '123');
mysql_select_db('mydatabase');
$sql="select * from employee2";
$records=mysql_query($sql);
?>
<html>
<head>
<title>Employee Data</title>
</head>
<div id="a1" style="left:273px; top:435px; background-color:#FFF">
<body bgcolor="red">
<center><tr></tr><table width="600" border="1" cellpadding="1" cellspacing="1"></tr>

<th>Id</th>
<th>Name</th>
<th>Physics</th>
<th>Chemistry</th><th>Math</th><th>Total</th>
</center>
<?php
while($employee=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$employee['id']."</td>";
echo "<td>".$employee['name']."</td>";
echo "<td>".$employee['phy']."</td>";
echo "<td>".$employee['che']."</td>";echo "<td>".$employee['math']."</td>";echo "<td>".$employee['total']."</td>";
echo "</tr>";
}

?>
</table>
</body>
</html>