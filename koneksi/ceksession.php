<?php
session_start();
if(isset($_SESSION['user'])){
	if ($_SESSION['user']=='admin'){
		header('location:user/admin/');
		exit();
	}
	else if ($_SESSION['user']=='mahasiswa'){
		header('location:user/mahasiswa/');
		exit();
	}
}

?>