<?php
    include("partial/config.php");
    include("partial/head.php");
    if ($_SESSION['pjlogin'] == 'member') {
      $id = $_SESSION['id'];
      $data = mysqli_query($mysqli, "SELECT * FROM member WHERE id='$id'");
      $dr = mysqli_fetch_array($data);
	  $dataa = mysqli_query($mysqli, "SELECT * FROM bibliography WHERE id_buku='".$_GET['id_buku']."'");
	  $bk = mysqli_fetch_array($dataa);
	}else{
		header('Location : pustakajendela');
		exit;
	}
?>
<!DOCTYPE html>
<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="assets/img/logoku.png" alt="" title="" width="100" height="40"/></img></a>
      </div>

      <?php include("partial/navbar.php");?> <!-- ini bagian navbar -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>DETAIL BUKU<br>"<?php echo $bk['judul']?>"</h1>
      
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->
<section id="about">
      <div class="container">
        <div class="section-header">
			<?php
      if($_SESSION['pjlogin'] == 'bibliography'):
      ?>
        <?php if($dr['foto'] != ''):?>
          <img class="img-profile square-square" src="<?php echo 'buku'.$dr['foto'];?>" height="200" width="200">
        <?php endif;?>
      <?php endif;?>
			<h6>Last Edited by Admin : <?php echo $bk['waktu_admin_input']?></h6>
			<div class="row">
				<div class="col col-lg-3">No Panggil</div>
				<div class="col col-lg-9">: <?php echo $bk['no_panggil']?></div>
			</div>
			<div class="row">
				<div class="col col-lg-3">Judul</div>
				<div class="col col-lg-9">: <?php echo $bk['no_panggil']?> (Edisi : <?php echo $bk['edisi']?>)</div>
			</div>
			<div class="row">
				<div class="col col-lg-3">Pengarang</div>
				<div class="col col-lg-9">: <?php echo $bk['pengarang']?></div>
			</div><div class="row">
				<div class="col col-lg-3">Penerbit</div>
				<div class="col col-lg-9">: <?php echo $bk['penerbit']?></div>
			</div><div class="row">
				<div class="col col-lg-3">Kota Terbit</div>
				<div class="col col-lg-9">: <?php echo $bk['kota_terbit']?></div>
			</div>
			<div class="row">
				<div class="col col-lg-3">Jenis Buku</div>
				<div class="col col-lg-9">: <?php echo $bk['jenis_buku']?></div>
			</div>
			<div class="row">
				<div class="col col-lg-3">Sumber Buku</div>
				<div class="col col-lg-9">: <?php echo $bk['sumber']?></div>
			</div><div class="row">
				<div class="col col-lg-3">Deskripsi</div>
				<div class="col col-lg-9">: <?php echo $bk['deskripsi']?></div>
			</div>
		</div>
      </div>
    </section>
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
