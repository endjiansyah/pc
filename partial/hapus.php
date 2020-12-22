<?php
	include("config.php");

	
	//echo $id_reader."-".$daftar_buku;
	$sql = "DELETE FROM pinjam WHERE id_pinjam='".$_GET['id_buku']."'";
	$query = mysqli_query($mysqli, $sql) or die ("Tidak Ada Database");
	
	if($query){
		echo "<script>alert('Hapus sukses!".$_GET['id_buku']."')</script>";
		echo "<script>top.location='../../pustakajendela'</script>";
	}else{
		echo "<script>alert('Hapus gagal!')</script>";
	echo "<script>top.location='../../pustakajendela'</script>";
	}
?>