<!--membuat halaman login-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title><!--judul pagenya-->
	<link rel="stylesheet" type="text/css" href="../style/a.css" media="screen" /><!--memanggil css untuk mempercantik halaman-->
</head>
<body>
	<form action="dlogin.php" method="post"><!--form dengan method POST dan action dblogin.php-->
		<table>
			<tr id="header"><!--memanggil id css-->
				<td colspan="2"> <center> <h2> Login Disini </h2> </td> </center><!--judul halaman login-->
			</tr>
			<tr>
				<td>Username</td><!--tabel username-->
				<td><input type="text" name="username" placeholder="Your Username"></td><!--inputannya-->
			</tr>
			<tr>
				<td>Password</td><!--tabel password-->
				<td><input type="password" name="password" placeholder="Your Password"></td><!--inputannya-->
			</tr>
			<tr>
				<td>&nbsp;</td><!--spasi-->
				<td><input type="submit" name="login" value="Login"><!--tombol submit-->
				<input type="reset" name="reset" value="Batalkan"></td><!--tombol reset-->
			</tr>
		</table>
	</form>

</body>
</html>