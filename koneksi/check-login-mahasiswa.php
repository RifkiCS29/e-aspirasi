<?php
//koneksi ke database
session_start();
include "koneksi.php";

//validasi login

$username=$_POST['username']; 
$password=$_POST['password']; 
$query=mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE nim='$username' AND password='$password'"); 
$data=$query->fetch_array();
$jumlah=$query->num_rows;

if ($jumlah>0){
	echo"login berhasil ! ";
	$nama=$data['nama'];
	$_SESSION[user] = 'mahasiswa';
	$_SESSION[nim] 	= $username;
	$_SESSION[nama] = $nama;
	header('location:../');
}
else{
    echo "<center>Username atau Password anda salah<br><br><h3>Silahkan Ulangi </h3></center>";
	echo "<meta http-equiv='refresh' content='1;url=../user/mahasiswa/login'>";
}
?>