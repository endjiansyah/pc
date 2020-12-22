<?php
    include("../../partial/config.php");

    $nama = $_POST['nama'];

        
        $sql = "UPDATE cpanel SET nama='$nama'";
        $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");

    if($query){
        echo "<script>top.location='../cpanel.php'</script>";
        
    }else{
        echo "<script>alert('Edit Detail Buku Gagal!')</script>";
        echo "<script>top.location='../cpanel.php'</script>";
    }

?>