<?php 
mysql_connect('localhost', 'root', '123');
mysql_select_db('mydatabase');
$sql="select * from employees";
$records=mysql_query($sql);
?>
<html>
<head>
<title>Employee Data</title>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>Age</th>
<th>Position</th>
<th>Salary</th>
<tr>
<?php
while($employee=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$employee['name']."</td>";
echo "<td>".$employee['age']."</td>";
echo "<td>".$employee['position']."</td>";
echo "<td>".$employee['salary']."</td>";
echo "</tr>";
}

?>
</table>
</body>
</html>