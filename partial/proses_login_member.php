<?php
    include("config.php");

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //echo $Username."-".$Email."-".$Password;
    $sql = "SELECT * FROM member WHERE username='$username' AND 
    password='$password'";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    $_SESSION['id'] = $data['id'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['foto'] = $data['foto'];
        
    if($row==1){
        echo "<script>alert('Login Sukses! :D ')</script>";
        if($data['akses'] == 'member'){
            $_SESSION['pjlogin'] = 'member';
            echo "<script>top.location='../../pustakajendela'</script>";
        }elseif($data['akses'] == 'su'){
            $_SESSION['pjlogin'] = 'su';
            echo "<script>top.location='../admin'</script>";
        }elseif($data['akses'] == 'admin'){
            $_SESSION['pjlogin'] = 'admin';
            echo "<script>top.location='../admin'</script>";
        }
    }else{
        echo "<script>alert('Yahhh Gagal! :( ')</script>";
        echo "<script>top.location='../login.php'</script>";
    }
?>