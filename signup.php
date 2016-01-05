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

<title>home</title>
</head>
<body bgcolor="orange">
<div style="text-align:center; position:absolute; left: 453px; top: 9px; height: 29px;"><h2><u>STUDENT MARKS ANALYSIS</u></h2></div>

<div style="height:30px; position:absolute; width:100%; left: 102px; top: 89px;">
<div id="a1" style="left:175px;" ><a href="home.php">Home</a></div>
<div id="a1"  style="left:325px;"><a href="signup.php">Sign Up</a></div> 
<div id="a1" style="left:475px;"><a href="course.php">Courses</a></div>
<div id="a1" style="left:625px;"><a href="about.php">About Us</a></div>
<div id="a1" style="left:775px;"><a href="contact.php">Contact Us</a></div>

</div>
</div>
<div style="position:absolute; left: 280px; top: 152px; height: 186px; width: 610px;">
<img src="images/Graduation-Students2.jpg" width="750px" height="330px">
</div>
<div style="position:absolute; width: 440px; height: 329px; left: 285px; top: 469px;">
<pre> <fieldset><legend>Register here</legend>
<form name="agreeform" onSubmit="return defaultagree(this)" action="signupinsert.php" method="post">
  Username	      : <input type="text" name="Username"><br>
  Password            : <input type="password" name="Password"><br>
  First Name          : <input type="text" name="fname"><br>
  Last Name           : <input type="text" name="lname"><br>
   Email              : <input name="eml" type="email"><br>
  Status              : <input type="text" name="sts"><br>
  
  
<input name="agreecheck" type="radio" value="yes" onClick="agreesubmit(this)">Agree<input type="radio" name="agreecheck" value="no" />Disagree<br />
  <input type="submit" value="submit")" />&nbsp;<input type="reset" value=" reset ">
</form>
</fieldset>
</pre>
</div>
</div>
</body>
</html>