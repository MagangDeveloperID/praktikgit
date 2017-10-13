<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="../style/a.css" media="screen" />
</head>
<body>
	<form action="dlogin.php" method="post">
		<table>
			<tr id="header">
				<td colspan="2"> <center> <h2> Login Disini </h2> </td> </center>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Your Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Your Password"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="login" value="Login">
				<input type="reset" name="reset" value="Batalkan"></td>
			</tr>
		</table>
	</form>

</body>
</html>