<?php
    include("config.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['hp'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];

    if(!empty($lokasi_file)){
        $foto="img/".date("y-m-d h-i-sa").$nama_file;
        move_uploaded_file($lokasi_file,$foto);
        
        $sql = "UPDATE member SET nama_lengkap='$nama',username='$username',
        password='$password', tempat_lahir='$tempat_lahir', tgl_lahir='$tanggal_lahir',
        alamat='$alamat', no_hp='$no_hp', email='$email', foto='$foto' WHERE id='$id'";
        $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");
        
    }else{
        $sql = "UPDATE member SET nama_lengkap='$nama',username='$username',
        password='$password', tempat_lahir='$tempat_lahir', tgl_lahir='$tanggal_lahir',
        alamat='$alamat', no_hp='$no_hp', email='$email' WHERE id='$id'";
        $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");
    }

    if($query){
        echo "<script>alert('Edit Profil Sukses!')</script>";
        echo "<script>top.location='../profil.php'</script>";
        
    }else{
        echo "<script>alert('Edit Profil Gagal!')</script>";
        echo "<script>top.location='../profil.php'</script>";
    }

?>