<html>
<head>
<style>
#a1
{ text-decoration:none;
text-align:center;
width:150px;
height:25px; 
position:absolute; 
background-color:#C208DB;}
#a1 a:hover
{
	color:#FFF
	background:#41DEDE;
}
body
{
	style="width:1000px;
	margin-left:100px;  
	margin-top:8px;
}
</style>

<title>Personal</title>
</head>
<body bgcolor="#F7BE13" >
<div style="text-align:center; position:absolute; left: 453px; top: 9px; height: 29px;"><h2><u>UPDATE STUDENT DETAILS</u></h2></div>

<div style="height:30px; position:absolute; width:100%; left: 102px; top: 89px;">
<div id="a1" style="left:175px;" ><a href="#">Presonal</a></div>
<div id="a1"  style="left:325px;"><a href="#">Academic</a></div> 
<div id="a1" style="left:475px;"><a href="#">Qualification</a></div>
<div id="a1" style="left:625px;"><a href="studentinfo.php">Student info</a></div>
<div id="a1" style="left:775px;"><a href="home.php">Log out</a></div>
</div>
<div style="position:absolute; left: 610px; top: 252px; height: 786px; width: 610px;">
<img src="images/w.jpg" width="750px" height="250px">
</div>
<div style="height:100px; position:absolute; width:750px; left:610px; top:150px;">
<p><font face="Arial, Helvetica, sans-serif" size="+2" color="#0000a6">New:-</font></p>
<p>If you want check the list of all student whose information is stred in the data then you can click on student info tab.</p>
</div>
<div style="position:absolute; width:1050px; height:auto; top:150px; left:94px">
<table>
<tbody>
<form action="studetailinsert.php" method="post">

<tr>
	
    <td colspan="5" style="font-size:4px">&nbsp;</td>
</tr>
<tr>
	<td rowspan="5">
    <table width="195">
    
    </table>
    </td><td>&nbsp;</td>
    <td colspan="8" align="right" ><i>Student Id Number</i></td>
	<td><input type="number" name="id" placeholder="Student id"></td>
</tr>
<tr><td></td>
	<td colspan="8" align="right"><i>Username</i></td>
	<td><input type="text" name="uname" placeholder="username"></td>
</tr>
<tr><td></td>
<td colspan="8" align="right"><i>Password</i></td>
	<td><input type="password" name="password" placeholder="password"></td>
</tr>
<tr><td></td>
<td colspan="8" align="right"><i>Name</i></td>
	<td><input type="text" name="name" placeholder="name"></td>
</tr>
<tr><td></td>
<td colspan="8" align="right"><i>Gender</i></td>
	<td><input type="text" name="gender" placeholder="gender"></td>
</tr>
<tr>
	<td>&nbsp;</td><td>&nbsp;</td>
<td colspan="8" align="right"><i>Date of Birth</i></td>
	<td><input type="date" name="dob"></td>
</tr>
<tr>
	<td></td><td></td>
<td colspan="8" align="right"><i>Blood Group</i></td>
	<td><input type="text" name="bg" placeholder="blood group"></td>
</tr>
<tr><td></td><td></td>
<td colspan="8" align="right"><i>Father's Name</i></td>
	<td><input type="text" name="fname" placeholder="father's name"></td>
</tr>
<tr>
<td></td><td></td>
<td colspan="8" align="right"><i>Mother's Name</i></td>
	<td><input type="text" name="mname" placeholder="mother's name"></td>
</tr>

<tr>
	<td>&nbsp;</td><td>&nbsp;</td>
<td colspan="8" align="right"><i>Address</i></td>
	<td><input type="text" name="address" placeholder="address"></td>
</tr>
<tr>
	<td>&nbsp;</td><td>&nbsp;</td>
<td colspan="8" align="right"><i>City</i></td>
	<td><input type="text" name="city" placeholder="city"></td>
</tr>
<tr>
	<td>&nbsp;</td><td>&nbsp;</td>
<td colspan="8" align="right"><i>State</i></td>
	<td><input type="text" name="state" placeholder="state"></td>
</tr>
<tr>
	<td>&nbsp;</td><td>&nbsp;</td>
<td colspan="8" align="right"><i>Phone Number</i></td>
	<td><input type="number" name="phoneno" placeholder="phone number"></td>
</tr>
<tr>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td colspan="8" align="right"><i>Email Id</i></td>
	<td><input type="email" name="email" placeholder="email"></td>
</tr>
<tr><td></td>
	<td colspan="17" align="right"><input type="submit" name="submit">&nbsp;&nbsp;&nbsp;<input type="reset" value="reset"></td>
</tr>
</form>
</tbody>
</table>
</div>
</body>
</html>