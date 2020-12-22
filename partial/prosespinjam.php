<?php
	include("config.php");

	$id = $_SESSION['id'];
	$buku = $_POST['buku'];

	// echo $id_reader."-".$pinjam_buku;
	$sql = "INSERT INTO pinjam (id_member, id_buku) VALUE ('$id','$buku')";
	$query = mysqli_query($mysqli, $sql) or die ("pinjam gagal");
	
	if($query){
		echo "<script>alert('Pinjam sukses!')</script>";
		echo "<script>top.location='../../pustakajendela/#buku'</script>";
	}else{
		echo "<script>('Pinjam gagal!')</script>";
		echo "<script><top.location='../../pustakajendela/#buku'</script>";
	}
?>