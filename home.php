<html>
<head>
<style>
#a1
{ text-decoration:none;
text-align:center;
width:150px;
height:25px; 
position:absolute; 
background-color:#41DEDE;}
#a1 a:hover
{
	color:#FFF;
	background:#41DEDE;
}
body
{
	style="width:1000px;
	margin-left:100px; 
	margin-top:8px;
	
}
</style>
<script type="text/javascript">

var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

function checkmail(e){
var returnval=emailfilter.test(e.value)
if (returnval==false){
alert("Please enter a valid email address.")
e.select()
}
return returnval
}

</script>

<title>home</title>
</head>
<body>
<div style="text-align:center; position:absolute; left: 300px; top: 9px; height: 29px;"><h1><marquee direction=left bgcolor="gray">WELCOME  TO STUDENT MARKS ANALYSIS</marquee></h1></div>

<div style="height:30px; position:absolute; width:100%; left: 102px; top: 89px;">
<div id="a1" style="left:175px;" ><a href="home.php">Home</a></div>
<div id="a1"  style="left:325px;"><a href="signup.php">Sign Up</a></div> 
<div id="a1" style="left:475px;"><a href="course.php">Courses</a></div>
<div id="a1" style="left:625px;"><a href="about.php">About Us</a></div>
<div id="a1" style="left:775px;"><a href="contact.php">Contact Us</a></div>

</div>
</div>
<div style="position:absolute; left: 280px; top: 152px; height: 186px; width: 610px;">
<img src="images/310.jpg" width="750px" height="250px">
</div>
<div id="a1" style="left:273px; top:435px; background-color:#FFF">
<fieldset><legend>AUTHORISED LOGIN</legend>
<form action="passwd.php" method="post">
<table>
<tr><td>Login Id:</td><td><input type="text" name="name"></td></tr>
<tr><td>Password:</td><td><input type="password" name="pass"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="LOGIN" value="Login">&nbsp;&nbsp;<input type="reset" value="reset"></td></tr>
<tr><td colspan="2" align="left" style="font-size:12px"><a href="signup.php">For New User...</a>&nbsp;<a href="forget.php">Forget Password</a></td></tr>
</table>
</form>
</fieldset>
</div>
<div id="a1" style="right:273px; top:435px; background-color:#FFF">
<fieldset><legend>CHECK RESULT</legend>
<form action="employee3.php" method="post">
<table>
<tr>
<td><FONT SIZE="2PX">COURSE NAME :</FONT></td>
<td>
<select name="C_NAME" >
<option value="value">..select course..</option>
<OPTION>B.TECH</OPTION>
<OPTION>M.TECH</OPTION>
<OPTION>MBA</OPTION>
</td></tr>
<tr>
<td><FONT SIZE="2PX">BRANCHE NAME :</FONT></td>
<td>
<select >
<option value="value">..select branch..</option>
<OPTION>COMPUTER SCIENCE</OPTION>
<OPTION>ELECTRICAL</OPTION>
<OPTION>MECHANICAL</OPTION>
<OPTION>CIVIL</OPTION>
<OPTION>CHEMICAL ENGINEERING</OPTION>
<OPTION>AUTOMOBILE ENGINEERING</OPTION>
<OPTION>PETROLIUM ENGINEERING</OPTION>
</td>
<tr><td>STUDENT NAME:</td><td><input type="text" name="name"></td></tr>
<tr><td>ROLL NO:</td><td><input type="text" name="roll"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit">&nbsp;&nbsp;<input type="reset" value="reset"></td></tr>

</table>
</form>
</fieldset>
</div>

<div style="position:absolute; width:482px; left:544px; top:426px; height:198px;">
<p align="justify"></p>
 
<p align="justify"></p>
</div>

</body>
</html>