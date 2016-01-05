<?php 
mysql_connect('localhost', 'root', '123');
mysql_select_db('projectdatabase');
$sql="select * from marks";
$records=mysql_query($sql);
?>
<html>
<head>
<title>Employee Data</title>
</head>
<body>
<table width="800" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>STUDENT NAME</th>
<th>ROLL N0.</th>
<th>PHYSICS</th>
<th>CHEMISTRY</th>
<th>MATH</th>
<th>TOTAL</th>
<tr>
<?php
while($employee=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$employee['sname']."</td>";
echo "<td>".$employee['rno']."</td>";
echo "<td>".$employee['phy']."</td>";
echo "<td>".$employee['che']."</td>";
echo "<td>".$employee['math']."</td>";
echo "<td>".$employee['total']."</td>";
echo "</tr>";
}

?>
</table>
</body>
</html>