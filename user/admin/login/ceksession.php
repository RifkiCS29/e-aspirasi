<?php
session_start();
if(isset($_SESSION['user'])){
	if ($_SESSION['user']=='admin'){
		header('location:../');
		exit();
	}
	else if ($_SESSION['user']=='mahasiswa'){
		header('location:../../mahasiswa/');
		exit();
	}
}

?>