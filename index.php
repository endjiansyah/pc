<!DOCTYPE html>
<?php
    include("partial/config.php");
    include("partial/head.php");
    if ($_SESSION['pjlogin'] == 'member') {
      $id = $_SESSION['id'];
      $data = mysqli_query($mysqli, "SELECT * FROM member WHERE id='$id'");
      $dr = mysqli_fetch_array($data);
    }elseif ($_SESSION['pjlogin'] == 'admin' || $_SESSION['pjlogin'] == 'su' ) {
      header('Location: admin');
    exit;
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
      <h1>Selamat datang di Pustaka Jendela</h1>
      <?php
      if($_SESSION['pjlogin'] == 'member'):
      ?>
        <h1><b><?php echo $dr['nama_lengkap'];?></b></h1>
        <?php if($dr['foto'] != ''):?>
          <img class="img-profile rounded-circle" src="<?php echo 'partial/'.$dr['foto'];?>" height="200" width="200">
        <?php endif;?>
      <?php endif;?>
      <h2>Selamat membaca ^_^</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">
    <?php if ($_SESSION['pjlogin'] == '0') {
      include('partial/partindex.php');
    }else{
      include('partial/partmember.php');
    }
    ?>
  </main>

  <!--==========================
    Footer
  ============================-->
<?php include('partial/footer.php');?>
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

</body>
</html>
