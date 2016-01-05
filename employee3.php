<?php
$username ='root';
$password ='123';
$hostname ='localhost';
$database ='mydatabase';
$localhost = mysql_connect($hostname,$username,$password) or die(mysql_error());
mysql_select_db("mydatabase",$localhost);
$query="SELECT * FROM employee2 where name='$_POST[name]'";
$result=mysql_query($query,$localhost);
while($row = mysql_fetch_array($result))
{
echo '<table border="2" height="50" width="600" bgcolor="orange">
<tr><td width="90">id</td><td width="90">name</td><td width="90">phy</td><td width="90">che</td><td width="90">math</td><td width="90">total</td>
</tr><tr><td width="90">'
.$row['id'].'</td><td width="90">'.$row['name'].'</td><td width="90">'.$row['phy'].'</td><td width="90">'
.$row['che'].'</td><td width="90">'.$row['math']
.'</td><td width="90">'.$row['total'].'</td></tr></table>';
}
mysql_close($localhost);

?>
<html>
<body><tr>
<p><b><blink>Click here >></blink></b></p><a href="home.php">Go to home page</a></tr></body></html> 