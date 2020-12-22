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
            <h1 class="h3 mb-0 text-gray-800">Atur Bibliography</h1>
          </div>

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Bibliography<a class="btn btn-sm btn-success float-right" href="tambahbuku.php">Tambah Buku</a></h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Nomor Panggil</th>
                      <th>Jenis</th>
                      <th>Edisi</th>
                      <th>Penerbit</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $databk = mysqli_query($mysqli, "SELECT * FROM bibliography");
                    $bb = mysqli_fetch_array($databk);
                    foreach($databk as $buku): ?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $buku['judul'];?></td>
                      <td><?php echo $buku['no_panggil'];?></td>
                      <td><?php echo $buku['jenis_buku'];?></td>
                      <td><?php echo $buku['edisi'];?></td>
                      <td><?php echo $buku['penerbit'];?></td>
                      <td><?php echo $buku['thn_terbit'];?></td>
                      <td><a class="btn btn-sm btn-info" href="detailbuku.php?id_buku=<?php echo $buku['id_buku']?>">detail</a>
                      <a class="btn btn-sm btn-warning" href="editbuku.php?id_buku=<?php echo $buku['id_buku']?>">edit</a>
                      <a class="btn btn-sm btn-danger" href="partial/hapusbuku.php?id_buku=<?php echo $buku['id_buku']?>">hapus</a></td>
                    </tr>
                  </tbody>
                  <?php $no++;endforeach; ?>
                </table>
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
