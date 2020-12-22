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
            <h1 class="h3 mb-0 text-gray-800">List Member Pustaka Jendela</h1>
          </div>
          <div class="card shadow mb-4">
            <div class="card-body">

          <!-- Content Row -->
		  <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
				<th>Foto</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Email</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Akses</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php
                $no = 1;
                $datamember = mysqli_query($mysqli, "SELECT * FROM member");
                $bb = mysqli_fetch_array($datamember);
                foreach($datamember as $memb):
                ?>
                <tr>
                <td><?php echo $no;?></td>
                <td><img src="../partial/<?php echo $memb['foto'];?>" width="150" height="150"></td>
                <td><?php echo $memb['nama_lengkap'];?></td>
                <td><?php echo $memb['username'];?></td>
                <td><?php echo $memb['email'];?></td>
                <td><?php echo $memb['tempat_lahir'];?>, <?php echo $memb['tgl_lahir'];?></td>
                <td><?php echo $memb['alamat'];?></td>
				<td><?php echo $memb['akses'];?></td>
				  <td>
            <a class="btn btn-sm btn-danger" href="hapusmember.php?id=<?php echo $memb['id']?>">Hapus</a></td>
              </tr>
              <?php $no++;endforeach; ?>
            </tbody>
          </table>
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
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 <?php include('partial/js.php');?>
  
</body>

</html>
