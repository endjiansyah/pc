<?php
    include("config.php");

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $password = md5($_POST['password']);
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];

    //echo $Username."-".$Email."-".$Password;
    $sql = "INSERT INTO member (nama_lengkap, username, email, no_hp, password, tempat_lahir, tgl_lahir, alamat, akses) VALUE ('$nama','$username',
    '$email','$hp','$password','$tempat','$tgl','$alamat','member')";
    $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Proses Daftar Sukses!')</script>";
        echo "<script>top.location='../../pustakajendela'</script>";
    }else{
        echo "<script>alert('Yahhh Proses Daftar Gagal!:(')</script>";
        echo "<script>top.location='../../pustakajendela'</script>";
    }

?>