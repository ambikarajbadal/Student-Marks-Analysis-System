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
 $input2 = $_POST['uname'];
 $input3 = $_POST['password'];
 $input4 = $_POST['name'];
 $input5 = $_POST['gender'];
 $input6 = $_POST['dob'];
 $input7 = $_POST['bg'];
 $input8 = $_POST['fname'];
 $input9 = $_POST['mname'];
 $input10 = $_POST['address'];
 $input11 = $_POST['city'];
 $input12 = $_POST['state'];
 $input13 = $_POST['phoneno'];
 $input14 = $_POST['email'];
$sql="INSERT INTO studentdetails (id, uname, password, name, gender, dob, bg, fname, mname, address, city, state, phoneno, email )
VALUES('$input1','$input2','$input3','$input4','$input5','$input6','$input7','$input8','$input9','$input10','$input11','$input12','$input13','$input14')";

 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "student detail update successfully";
 
mysql_close($con)
?>
</body>
</html