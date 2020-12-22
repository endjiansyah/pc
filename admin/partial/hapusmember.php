<?php
	include("config.php");

	
	$sql = "DELETE FROM member WHERE id='".$_GET['id']."'";
	$query = mysqli_query($mysqli, $sql) or die ("Tidak Ada Database");
	
	if($query){
		echo "<script>alert('Hapus member sukses!".$_GET['id']."')</script>";
		echo "<script>top.location='list_member.php'</script>";
	}else{
		echo "<script>alert('Hapus member gagal!')</script>";
	echo "<script>top.location='list_member.php'</script>";
	}
?>