<html>
<body>
 <?php

$hostname = "localhost";
$username = "root";
$password = "123";
$db_name = "mydatabase";
$con = mysql_connect($hostname,$username,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($db_name, $con);
 $input1 = $_POST['id'];
 $input2 = $_POST['name'];
 $input3 = $_POST['phy'];
 $input4 = $_POST['che'];
 $input5 = $_POST['math'];
 $input6 = $_POST['total'];
$sql="INSERT INTO employee2 (id, name, phy, che, math, total)
VALUES('$input1','$input2','$input3','$input4','$input5','$input6')";

 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "student marks update successfully";
 
mysql_close($con)
?>
<a href="marksform.php">Go back</a>
</body>
</html