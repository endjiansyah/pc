<?php
    include("../partial/config.php");
    if ($_SESSION['pjlogin'] == 'admin' || $_SESSION['pjlogin'] == 'su') {
      $id = $_SESSION['id'];
      $data = mysqli_query($mysqli, "SELECT * FROM member WHERE id='$id'");
      $dr = mysqli_fetch_array($data);
      $dataa = mysqli_query($mysqli, "SELECT * FROM bibliography WHERE id_buku='".$_GET['id_buku']."'");
      $bk = mysqli_fetch_array($dataa);
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
            <h1 class="h3 mb-0 text-gray-800">Detail Buku</h1>
          </div>

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header">
              
              <div class="m-0 font-weight-bold text-dark h5"><a class="fas fa-book text-success"></a>
                 Judul Buku : <?php echo $bk['judul']; ?>
              <div class="float-right h6">Last Edited : <?php echo $bk['waktu_admin_input']; ?></div>
            </div>
              
            </div>
            <div class="card-body text-dark h6">
              <div class="row">
              <div class="col-lg-8">
              <div class="row">
                <div class="col col-lg-3">Nomor Panggil</div>
                <div class="col col-lg-9">: <?php echo $bk['no_panggil']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Jenis Buku</div>
                <div class="col col-lg-9">: <?php echo $bk['jenis_buku']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Pengarang</div>
                <div class="col col-lg-9">: <?php echo $bk['pengarang']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Penerbit</div>
                <div class="col col-lg-9">: <?php echo $bk['penerbit']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Tahun Terbit</div>
                <div class="col col-lg-9">: <?php echo $bk['thn_terbit']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Kota Terbit</div>
                <div class="col col-lg-9">: <?php echo $bk['kota_terbit']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Edisi</div>
                <div class="col col-lg-9">: <?php echo $bk['edisi']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Sumber</div>
                <div class="col col-lg-9">: <?php echo $bk['sumber']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Jumlah Eksemplar</div>
                <div class="col col-lg-9">: <?php echo $bk['jml_eksemplar']; ?></div>
              </div>
              <div class="row">
                <div class="col col-lg-3">Deskripsi</div>
                <div class="col col-lg-9">: <?php echo $bk['deskripsi']; ?></div>
              </div><hr>
              <div class="row">
                <div class="col col-lg-3"></div>
                <div class="col col-lg-9"><a class="btn btn-warning" href="editbuku.php?id_buku=<?php echo $bk['id_buku']?>">Edit Detail Buku</a></div>
              </div>

              </div>
              <div class="col-lg-4 text-center" <?php if($bk['foto'] == ''): ?>class="bg-secondary" style="border:solid 1px"<?php endif; ?>>
                <?php if($bk['foto'] != ''): ?>
                <img class="img-profile" src="../partial/<?php echo $bk['foto'];?>" width="100%">
                <?php endif;if($bk['foto'] == ''): ?>
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
