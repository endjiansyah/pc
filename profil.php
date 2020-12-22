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
      <h1>LIHAT Profil</h1>
      
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->
<section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2 icon-box">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="float-right">
              
              <a href="aturprofil.php" class="btn btn-info">
                Edit Profil
              </a>
            </div>
            <h2 class="title">Profil</h2>
            <h5 class="description">Last Edit: <?php echo $dr['waktu_input_data']; ?></h5>
            
            <hr>

            <div class="icon-box wow fadeInUp">
              <h4 class="title"><a>Nama</a></h4>
              <p class="description"><?php echo $dr['nama_lengkap']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp">
              <h4 class="title"><a>Alamat</a></h4>
              <p class="description"><?php echo $dr['alamat']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp">
              <h4 class="title"><a>Email</a></h4>
              <p class="description"><?php echo $dr['email']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp">
              <h4 class="title"><a>No HP</a></h4>
              <p class="description"><?php echo $dr['no_hp']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp">
              <h4 class="title"><a>Tempat & Tanggal Lahir</a></h4>
              <p class="description"><?php echo $dr['tempat_lahir'].', '.$dr['tgl_lahir']; ?></p>
            </div>

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
