<?php
    include("config.php");

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
        
        $sql = "INSERT INTO bibliography (judul, pengarang, no_panggil, thn_terbit, penerbit, kota_terbit, edisi, jml_eksemplar, jenis_buku, deskripsi,sumber,foto) VALUE ('$judul','$pengarang','$no_panggil','$thn','$penerbit','$kota','$edisi','$eksemplar','$jenis','$deskripsi','$sumber','$foto')";
    $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");

        
    }else{
        $sql = "INSERT INTO bibliography (judul, pengarang, no_panggil, thn_terbit, penerbit, kota_terbit, edisi, jml_eksemplar, jenis_buku, deskripsi,sumber) VALUE ('$judul','$pengarang','$no_panggil','$thn','$penerbit','$kota','$edisi','$eksemplar','$jenis','$deskripsi','$sumber')";
        $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");
    }

    if($query){
        echo "<script>alert('Daftarkan Buku Sukses!')</script>";
        echo "<script>top.location='../bibliography.php'</script>";
        
    }else{
        echo "<script>alert('Daftarkan Buku Gagal!')</script>";
        echo "<script>top.location='../bibliography.php'</script>";
    }

?>