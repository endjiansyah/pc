<?php
    include("config.php");

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $no_panggil = $_POST['no_panggil'];
    $jenis = $_POST['jenis'];
    $penerbit = $_POST['penerbit'];
    $thn = $_POST['thn'];
    $kota = $_POST['kota'];
    $edisi = $_POST['edisi'];
    $sumber = $_POST['sumber'];
    $eksemplar = $_POST['eksemplar'];
    $deskripsi = $_POST['deskripsi'];

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];

    if(!empty($lokasi_file)){
        $foto="img/".date("y-m-d h-i-sa").$nama_file;
        $savefoto="../../partial/".$foto;
        move_uploaded_file($lokasi_file,$savefoto);
        
        $sql = "UPDATE bibliography SET judul='$judul',pengarang='$pengarang',
        no_panggil='$no_panggil', thn_terbit='$thn', penerbit='$penerbit', kota_terbit='kota', edisi='$edisi', jml_eksemplar='$eksemplar', foto='$foto',jenis_buku='$jenis',deskripsi='$deskripsi',sumber='$sumber' WHERE id_buku='$id'";
        $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");
        
    }else{
        $sql = "UPDATE bibliography SET judul='$judul',pengarang='$pengarang',
        no_panggil='$no_panggil', thn_terbit='$thn', penerbit='$penerbit', kota_terbit='kota', edisi='$edisi', jml_eksemplar='$eksemplar',jenis_buku='$jenis',deskripsi='$deskripsi',sumber='$sumber' WHERE id_buku='$id'";
        $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");
    }

    if($query){
        echo "<script>alert('Edit Detail Buku Sukses!')</script>";
        echo "<script>top.location='../detailbuku.php?id_buku=".$id."'</script>";
        
    }else{
        echo "<script>alert('Edit Detail Buku Gagal!')</script>";
        echo "<script>top.location='../detailbuku.phpid_buku=".$id."'</script>";
    }

?>