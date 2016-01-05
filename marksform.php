<html>
<head>
<style>
#a1
{ text-decoration:none;
text-align:center;
width:150px;
height:25px; 
position:absolute; 
background-color:orange;}
#a1 a:hover
{
	color:#red;
	background:#41DEDE;
}

</style>

<title>home</title>
</head>
<body bgcolor="#C307F7">
<div style="text-align:center; position:absolute; left: 453px; top: 9px; height: 29px;"><h1><marquee direction=left>UPDATE STUDENT RESULTS</marquee></h1></div>
<div style="text-align:center; position:absolute; left: 453px; top: 100px; height: 29px;"><h2><u>ENTER THE STUDENT MARKS</U></h2></div>
<div style="height:30px; position:absolute; width:100%; left: 102px; top: 89px;">
<div id="a1" style="left:175px;" ><a href="home.php">Home</a></div>
<div id="a1"  style="left:325px;"><a href="signup.php">Sign Up</a></div> 
<div id="a1" style="left:475px;"><a href="course.php">Courses</a></div>
<div id="a1" style="left:625px;"><a href="employee2.php">All marks</a></div>
<div id="a1" style="left:775px;"><a href="home.php">Logout</a></div>

</div>
</div>

<div style="position:absolute; width: 440px; height: 329px; left: 400px; top: 200px;">
<pre> <fieldset>
<form name="agreeform" onSubmit="return defaultagree(this)" action="marksinsert.php" method="post">
  ID         : <input type="number" name="id"><br>
  Name       : <input type="text" name="name"><br>
  PHYSICS    : <input type="number" name="phy"><br>
  CHEMISTRY  : <input type="number" name="che"><br>
  MATH       : <input type="number" name="math"><br>
  TOTAL      : <input type="number" name="total"><br>
  
  
<input name="agreecheck" type="radio" value="yes" onClick="agreesubmit(this)">Agree<input type="radio" name="agreecheck" value="no" />Disagree<br />
  <input type="submit" value="submit")" />&nbsp;<input type="reset" value=" reset ">
</form>
</fieldset>
</pre>
</div>
</div>
</body>
</html>