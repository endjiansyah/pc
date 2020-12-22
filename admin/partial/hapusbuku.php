<?php
	include("../../partial/config.php");

	
	//echo $id_reader."-".$daftar_buku;
	$sql = "DELETE FROM bibliography WHERE id_buku='".$_GET['id_buku']."'";
	$query = mysqli_query($mysqli, $sql) or die ("Tidak Ada Database");
	
	if($query){
		echo "<script>alert('Hapus sukses!')</script>";
		echo "<script>top.location='../bibliography.php'</script>";
	}else{
		echo "<script>alert('Hapus gagal!')</script>";
	echo "<script>top.location='../bibliography.php'</script>";
	}
?>