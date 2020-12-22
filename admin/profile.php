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
            <h1 class="h3 mb-0 text-gray-800">Edit Profil Admin</h1>
          </div>

          <div class="card shadow mb-4">

          <!-- Content Row -->
          <div class="card-body">
					<form action="partial/editprofil.php" method="POST" 
					enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php
							echo $id;?>">
							<b>Nama Lengkap: </b><br>
							<input type="text" name="nama_lengkap" value="<?php
							echo $dr['nama_lengkap'];?>" class = "form-control"><hr>
							<b>Username:</b><br>
							<input type="text" name="username" id="username" value="<?php
							echo $dr['username'];?>" class = "form-control"><hr>
							<b>Password:</b><br>
							<input type="password" name="password" id="password" placeholder="Isi Password" class = "form-control" required><hr>
							<b>Email:</b><br>
							<?php echo $dr['email'];?><hr>
							<b>Tempat Lahir:</b><br>
							<input type="text" name="tempat_lahir" value="<?php
							echo $dr['tempat_lahir'];?>" class = "form-control"><hr>
							<b>Tanggal Lahir:</b><br>
							<input type="text" name="tgl_lahir" value="<?php
							echo $dr['tgl_lahir'];?>" class = "form-control"> Format: YYYY-BB-HH <hr>
							<b>Alamat:</b><br>
							<textarea name="alamat"  class = "form-control"><?php echo $dr['alamat']; ?></textarea><hr>
							<b>Nomer Handphone:</b><br>
							<input type="text" name="no_hp" value="<?php
							echo $dr['no_hp'];?>" class = "form-control"><hr>
							<b>Foto:</b><br>
							<img src="../partial/<?php echo $dr['foto'];?>" width="150" height="150"><br>
							<br><input type="file" name="foto"  class = "form-control"><hr>

							<input class="btn btn-success" type="submit" value="Save Changes" class = "form-control">
					</form>
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
