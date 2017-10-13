<?php

	session_start();//memulai session
	unset($_SESSION['username']);//dimana yang menjadi pk di tabel=username
	echo "<script>location.href='login.php'</script>";//maka akan lari ke login.php
?>