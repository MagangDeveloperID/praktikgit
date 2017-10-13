<!--Mmebuat halaman login-->
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Login</title> <!--Judul-->
	<link rel="stylesheet" type="text/css" href="../style/a.css"><!--memanggil css unutk mempercantik halaman login nya-->
</head>
<body>
	<form action="" method="post" name="form1"><!--membuat form dengan method POST-->
		<table><!--Tabel untuk notifikasi setelah login-->
			<tr>
				<td>
					<!--script php untuk login-->
					<?php
						if (isset($_POST['login'])) { //memilih table yang akan dipanggil
							$username=$_POST['username']; //dimana username = uername pada tabel
							$password=$_POST['password']; //dan password = password

							if ($username == "admin" && $password =="a") { //jika user memasukkan username=admin dan password = a
								echo "<h2> Login Berhasil </h2> <br> <h2> Welcome $username </h2>"; //maka ia berhasil masuk 
							} else {
								echo "<h2> Login Gagal </h2>"; //jika memasukkan selain itu maka Login Gagal
							}
						}

					?>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>