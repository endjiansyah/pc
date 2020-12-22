<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "pustakajendela";

    $mysqli = mysqli_connect($host,$user,$pass,$db) or die ("Tidak dapat terkoneksi dengan database");

    session_start();
	if(!isset($_SESSION['pjlogin'])){
		$_SESSION['pjlogin'] = '0';
        $_SESSION['halaman'] = 'pustakajendela';
		header('Location: ../pustakajendela');
		exit;
	}
?>

