<?php
session_start();
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("farmer_friend") or die(mysql_error());
if(isset($_POST['log'])){
	$type=$_POST['logintype'];
	$user=$_POST['un'];
	$password=$_POST['pw'];
	$_SESSION['user']=$user;
	if($type=='farmer'){	
$row=mysql_query("select password from register where email='$user'") or die(mysql_error());
$col=mysql_fetch_array($row) or die(mysql_error());
if($col[0]==$password)
	header("Location:farmer/index.php");
else
	echo "<script>alert('Login Not Accepted !');</script>";
	}
if($type=='admin'){
if($user=='admin' && $password=='admin')
	header("Location:admin/index.php");
else
	echo "<script>alert('Login Not Accepted !');</script>";
	}
}
?>
<html>
<head>
<title>Login</title>
</head>
<body bgcolor="lightwhite">
<form method="post">
<table height="300" width="400" bgcolor="lightgreen" border="0" align="center">
<tr>
<th colspan="2" align="center"><b><font color="red" size="5">Login Form</font></b></th>
</tr>
<tr>
<td colspan="2" align="" style=""><b><font color="blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Your Type For Login</font><sup><font color="red">**</font></sup> <font color="blue"></font></b> <select name="logintype" style="width:122px;height:30px;">
<option value="select type">Select Type</option>
<option value="admin"></option>
<option value="farmer">user</option>
</select>
</td>
</tr>
<tr>
<td align="center"><b>UserName<sup><font color="red">**</font></sup></b></td><td align="center"><input type="text" name="un" style="height:30px;"/></td>
</tr>
<tr>
<td align="center"><b>Password<sup><font color="red">**</font></sup></b></td><td align="center"><input type="password" name="pw" style="height:30px;"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="log" value="Login" style="background-color:blue;width:100px;height:30px;color:white;font-weight:bold;font-size:18px;border-radius:10px;"/>
<button type="button" name="cancel" style="background-color:blue;width:100px;height:30px;color:white;font-weight:bold;font-size:18px;border-radius:10px;">Cancel</button>
</td>
</tr>
<tr>
<td colspan="2" align="center"><b>Don't Have Account ?</b><br/><a href="register.php" target="m_frame"><img src="images/signup.jpg" /></a></td>
</tr>
<!--<tr>
<td colspan="2" align="center">Sign In Problem ?&nbsp;&nbsp;&nbsp; <a href=""><b>Forget User Name</b></a>&nbsp;&nbsp;&nbsp;<a href=""><b>Forget Password</b></a></td>
</tr>-->
</table>
</form>
</body>
</html>