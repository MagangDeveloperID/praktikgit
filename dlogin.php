<!DOCTYPE html>
<html>
<head>
	<title>Hasil Login</title>
	<link rel="stylesheet" type="text/css" href="../style/a.css">
</head>
<body>
	<form action="" method="post" name="form1">
		<table>
			<tr>
				<td>
					<?php
						if (isset($_POST['login'])) {
							$username=$_POST['username'];
							$password=$_POST['password'];

							if ($username == "admin" && $password =="a") {
								echo "<h2> Login Berhasil </h2> <br> <h2> Welcome $username </h2>";
							} else {
								echo "<h2> Login Gagal </h2>";
							}
						}

					?>
				</td>
			</tr>
			<tr>
				<td><a href="logout.php">Logout</a></td><!--lari ke logout-->
			</tr>
		</table>
	</form>

</body>
</html>