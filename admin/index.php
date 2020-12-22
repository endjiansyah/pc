<?php
    include("../partial/config.php");
    if ($_SESSION['pjlogin'] == 'admin' || $_SESSION['pjlogin'] == 'su') {
      $id = $_SESSION['id'];
      $data = mysqli_query($mysqli, "SELECT * FROM member WHERE id='$id'");
      $dr = mysqli_fetch_array($data);
    }else{
      header('Location: ../../pustakajendela');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php include('partial/head.php');?>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('partial/sidebar.php');?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('partial/topbar.php');?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang Admin <?php echo $_SESSION['nama_lengkap']; ?></h1>

          </div>
          <div class="card shadow mb-4">
            <div class="card-header">
              <div class="m-0 font-weight-bold text-dark h5">
                <a class="fas fa-user text-dark"></a>
                Data Diri Admin
              </div>
            </div>
            <div class="card-body text-dark h6">
              <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col col-lg-4">Nama </div>
                    <div class="col col-lg-8 font-weight-bold">: <?php echo $dr['nama_lengkap']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-4">Email </div>
                    <div class="col col-lg-8 font-weight-bold">: <?php echo $dr['email']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-4">Nomor HP </div>
                    <div class="col col-lg-8 font-weight-bold">: <?php echo $dr['no_hp']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-4">Tempat / Tanggal Lahir </div>
                    <div class="col col-lg-8 font-weight-bold">: <?php echo $dr['tempat_lahir']?> / <?php echo $dr['tgl_lahir']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col col-lg-4">Alamat </div>
                    <div class="col col-lg-8 font-weight-bold">: <?php echo $dr['alamat']; ?></div>
                  </div>
                </div>
                <div class="col-lg-4 text-center" <?php if($dr['foto'] == ''): ?>class="bg-secondary" style="border:solid 1px"<?php endif; ?>>
                  <?php if($dr['foto'] != ''): ?>
                    <img class="img-profile" src="../partial/<?php echo $dr['foto'];?>" width="100%">
                  <?php endif;if($dr['foto'] == ''): ?>
                    <div class="h6" style="margin-top: 10px">Sampul Buku Belum Tersedia</div>
                  <?php endif; ?>

              </div>
              </div>
            </div>
          </div>


    </div>
        <!-- /.container-fluid -->

    </div>
      <!-- End of Main Content -->
	  
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include('partial/modal.php');?>

 <?php include('partial/js.php');?>
  
</body>

</html>
