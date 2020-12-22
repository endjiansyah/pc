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
              
              <div class="m-0 font-weight-bold text-dark h5"><a class="fas fa-book text-success"></a> Judul Buku yang diedit: <?php echo $bk['judul']; ?>
              <div class="float-right h6">Last Edited : <?php echo $bk['waktu_admin_input']; ?></div>
            </div>
              
            </div>
            <div class="card-body text-dark h6">
              <div class="row">
              <div class="col-lg-8">
            <form action="partial/proseseditbuku.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $bk['id_buku'];?>">
              <div class="row align-items-center">
                <div class="col col-lg-3">Judul</div>
                <input type="text" name="judul" value="<?php echo $bk['judul']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Nomor Panggil</div>
                <input type="number" name="no_panggil" value="<?php echo $bk['no_panggil']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Jenis Buku</div>
                <input type="text" name="jenis" value="<?php echo $bk['jenis_buku']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Pengarang</div>
                <input type="text" name="pengarang" value="<?php echo $bk['pengarang']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Penerbit</div>
                <input type="text" name="penerbit" value="<?php echo $bk['penerbit']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Tahun Terbit</div>
                <input type="number" name="thn" value="<?php echo $bk['thn_terbit']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Kota Terbit</div>
                <input type="text" name="kota" value="<?php echo $bk['kota_terbit']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Edisi</div>
                <input type="text" name="edisi" value="<?php echo $bk['edisi']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Sumber</div>
                <input type="text" name="sumber" value="<?php echo $bk['sumber']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Jumlah Eksemplar</div>
                <input type="number" name="eksemplar" value="<?php echo $bk['jml_eksemplar']; ?>" class = "form-control col col-lg-9">
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Deskripsi</div>
                <textarea name="deskripsi"  class = "form-control col col-lg-9"><?php echo $bk['deskripsi']; ?></textarea>
              </div>
              <div class="row align-items-center">
                <div class="col col-lg-3">Sampul</div>
              <input type="file" name="foto"  class = "form-control col col-lg-9">
              </div><hr>
              <div class="row align-items-center">
                <div class="col col-lg-3"></div>
              <input type="submit" class="btn btn-success" value="Save Changes" class = "form-control">
              </div>

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
