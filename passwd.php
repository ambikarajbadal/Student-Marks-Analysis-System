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
 
$db=mysql_select_db($db_name, $con) or die("failed to connect to mysql:" . mysql_error());
function SignIn()
{
session_start();
$query=mysql_query("SELECT * FROM passwd where Username='$_POST[name]' AND pass='$_POST[pass]'") or die(mysql_error());
$row=mysql_fetch_array($query) or die(mysql_error());
if($row['Username'] AND $row['pass'])
{
$_SESSION['username']=$row['pass'];
echo "successfully login";
}
else
{
echo "sorry...you have entered wrong username or password ...retry...";
}
}
if(isset($_POST['LOGIN']))
{
	SignIN();
}

mysql_close($con)
?>
<a href="update.php">click here to continue</a>
</body>
</html