<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "pustakajendela";

    $mysqli = mysqli_connect($host,$user,$pass,$db) or die ("Tidak dapat terkoneksi dengan database");

    $cpanel = mysqli_query($mysqli, "SELECT * FROM cpanel");
      $cpn = mysqli_fetch_array($cpanel);

    session_start();
	if(!isset($_SESSION['pjlogin'])){
		$_SESSION['pjlogin'] = '0';
        $_SESSION['halaman'] = 'pustakajendela';
		header('Location: ../pustakajendela');
		exit;
	}
?>

