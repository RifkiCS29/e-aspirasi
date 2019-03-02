<?php

session_start();
if (empty($_SESSION['nama']) AND empty($_SESSION['user'])){
	header('location:login');
	exit();
}
else if (($_SESSION['user'])=='mahasiswa'){
	echo "<center><h3>Anda sedang login sebagai mahasiswa<br>
		silahkan logout terlebih dahulu <br>dan login sebagai 
		admin untuk mengakses halaman ini </h3><br><h2>Terima Kasih</h2> </center> ";
	echo "<meta http-equiv='refresh' content='3;url=../mahasiswa'>";
	exit();
}

?>