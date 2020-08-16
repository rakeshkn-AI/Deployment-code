<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("farmer_friend") or die(mysql_error());
if(isset($_POST['reg'])){
	$nm=$_POST['nm'];
	$em=$_POST['em'];
	$pw=$_POST['pw'];
	$cpw=$_POST['cpw'];
	$mob=$_POST['mob'];
	$ad=$_POST['addr'];
	$gen=$_POST['gen'];
	if($pw==$cpw)
	{
mysql_query("insert into register(name,email,password,mobile,address,gender) values('$nm','$em','$pw',$mob,'$ad','$gen')") or die(mysql_error());
echo "<script>alert('Your Registration Completed Sucessfully !');</script>";
	}
	else
	{
		echo "<script>alert('Please Enter Password and Confirm Password Same !');</script>";
	}
	
}
?>

<html>
<head>
<title>Register</title>
</head>
<body bgcolor="lightgreen">
<form method="post">
<table height="600" width="500" bgcolor="lightgreen" border="0" align="center">
<tr>
<th colspan="2" align="center"><b><font color="red" size="5">Registration Form</font></b></th>
</tr>
<tr>
<td align="center"><b>Enter Your Name<sup><font color="red">**</font></sup></b></td>
<td align="center"><input type="text" name="nm" style="width:250px;height:30px;"/></td>
</tr>
<tr>
<td align="center"><b>Enter Your Email<sup><font color="red">**</font></sup></b></td>
<td align="center"><input type="text" name="em" style="width:250px;height:30px;"/></td>
</tr>
<tr>
<td align="center"><b>Enter Your Password<sup><font color="red">**</font></sup></b></td>
<td align="center"><input type="password" name="pw" style="width:250px;height:30px;"/></td>
</tr>
<tr>
<td align="center"><b>Enter Confirm Password<sup><font color="red">**</font></sup></b></td>
<td align="center"><input type="password" name="cpw" style="width:250px;height:30px;"/></td>
</tr>
<tr>
<td align="center"><b>Enter Your Mobile<sup><font color="red">**</font></sup></b></td>
<td align="center"><input type="text" name="mob" style="width:250px;height:30px;"/></td>
</tr>
<tr>
<td align="center"><b>Enter Your Address<sup><font color="red">**</font></sup></b></td>
<td align="center"><input type="text" name="addr" style="width:250px;height:30px;"/></td>
</tr>
<tr>
<td align="center"><b>Select Your Gender<sup><font color="red">**</font></sup></b></td>
<td align="center">
<input type="radio" name="gen" value="male"/>Male
<input type="radio" name="gen" value="female"/>Female</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="reg" value="Register" style="background-color:blue;width:100px;height:30px;color:white;font-weight:bold;font-size:18px;border-radius:10px;"/>
<button type="button" name="cancel" style="background-color:blue;width:100px;height:30px;color:white;font-weight:bold;font-size:18px;border-radius:10px;">Cancel</button>
</td>
</tr>
<tr>
<th colspan="2" align="center"><b><a href="login.php" target="m_frame">
<font color="red">Click here to Login</a></font></b></th>
</tr>
</table>
</form>
</body>
</html>