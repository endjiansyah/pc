<!DOCTYPE html>
<?php
    include("partial/config.php");
    include("partial/head.php");
    if ($_SESSION['pjlogin'] == 'member'){
      $id = $_SESSION['id'];
      $data = mysqli_query($mysqli, "SELECT * FROM member WHERE id='$id'");
      $dr = mysqli_fetch_array($data);
    }
?>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="assets/img/logoku.png" alt="" title="" width="100" height="40"/></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <?php include("partial/navbar.php");?> <!-- iki bagian navbar -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>EDIT Profil</h1>
      
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->
<section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2 icon-box">
            <div class="icon"><i class="fa fa-user"></i></div>
            <h2 class="title">Edit Profil</h2>
            <h5 class="description">Last Edit: <?php echo $dr['waktu_input_data']; ?></h5>
            
            <hr>
            <form action="partial/editprofil.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $dr['id'];?>">

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Nama:</a></h5>
              <input type="text" name="nama" value="<?php echo $dr['nama_lengkap'];?>" class = "form-control">
            </div>

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Username:</a></h5>
              <input type="text" name="username" value="<?php echo $dr['username'];?>" class = "form-control" required>
            </div>

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Password:</a></h5>
              <input type="password" name="password" placeholder="isi password baru..." class = "form-control" required>
            </div>

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Email:</a></h5>
              <input type="text" name="email" value="<?php
              echo $dr['email'];?>" class = "form-control">
            </div>

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>No HP:</a></h5>
              <input type="number" name="hp" value="<?php
              echo $dr['no_hp'];?>" class = "form-control">
            </div>

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Tempat Lahir:</a></h5>
              <input type="text" name="tempat_lahir" value="<?php
              echo $dr['tempat_lahir'];?>" class = "form-control">
            </div>

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Tanggal Lahir:</a></h5>
              <input type="date" name="tanggal_lahir" value="<?php
              echo $dr['tgl_lahir'];?>" class = "form-control" required>
            </div>

            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Alamat:</a></h5>
              <textarea name="alamat"  class = "form-control"><?php echo $dr['alamat']; ?></textarea>
            </div>
            <div class="icon-box wow fadeInUp">
              <h5 class="strong"><a>Foto:</a></h5>
              <input type="file" name="foto"  class = "form-control">
            </div>

            <input type="submit" class="btn btn-success" value="Save Changes" class = "form-control">

            </div>
          </div>

        </div>
    </section>

  <!--==========================
    Footer
  ============================-->
<?php include('partial/footer.php');?>

</body>
</html>
