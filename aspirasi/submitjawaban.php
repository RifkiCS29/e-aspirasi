<?php
	session_start();
	include'../koneksi/koneksi.php';
	if (!($_POST['jawaban']=='')){
		date_default_timezone_set('Asia/Jakarta');
		
		$date  = date("H:i, d-m-Y");
		
		$jawaban	= $_POST['jawaban'];		
		$kd_aspirasi = $_SESSION['kd_aspirasi'];
		$sql = "UPDATE tb_aspirasi SET status='Terjawab', wkt_terjawab='$date', jawaban='$jawaban' where kd_aspirasi='$kd_aspirasi'";
				
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2>Jawaban anda telah disimpan<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../user/admin/aspirasi-terjawab/'>";
		unset($_SESSION['kd_aspirasi']);
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../user/admin/aspirasi-belum-terjawab'>";
	}
	
?>
	