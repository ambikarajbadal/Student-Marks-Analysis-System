<html>
<body>
 <?php

$hostname = "localhost";
$username = "root";
$password = "123";
$db_name = "signup";
$con = mysql_connect($hostname,$username,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($db_name, $con);
 $input1 = $_POST['Username'];
 $input2 = $_POST['Password'];
 $input3 = $_POST['fname'];
 $input4 = $_POST['lname'];
 $input5 = $_POST['eml'];
 $input6 = $_POST['sts'];
$sql="INSERT INTO signupinfo (Username, Password, fname, lname, eml, sts)
VALUES('$input1','$input2','$input3','$input4','$input5','$input6')";

 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "You are successfully registred";
 
mysql_close($con)
?>
<tr><td>
<a href="home.php">click here to continue</a></td></tr>
</body>
</html