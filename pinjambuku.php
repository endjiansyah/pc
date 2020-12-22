<!DOCTYPE html>
<?php
    include("partial/config.php");
    include("partial/head.php");
    if ($_SESSION['pjlogin'] == 'member') {
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
      <h1>DAFTAR SEMUA BUKU</h1>
      
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->
<section id="about">
      <div class="container">
        <div class="section-header">
          <input class="form-control alert-secondary" id="myInput" type="text" placeholder="Filter.."><br>
          <table class="table table-bordered">
            <thead class="table-secondary">
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jenis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php
                $no = 1;
                $databk = mysqli_query($mysqli, "SELECT * FROM bibliography");
                $bb = mysqli_fetch_array($databk);
                foreach($databk as $buku):
                ?>
                <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $buku['judul'];?></td>
                <td><?php echo $buku['jenis_buku'];?></td>
                <td><?php echo $buku['penerbit'];?></td>
                <td><?php echo $buku['thn_terbit'];?></td>
                <form action="partial/prosespinjam.php" method="POST">
                    <input type="hidden" name="buku" value="<?php echo $buku['id_buku'] ?>" />
                <td width="180px">
                  <a class="btn btn-sm btn-info" href="detailbuku.php?id_buku=<?php echo $buku['id_buku']?>">detail</a>
                  
                    <input class="btn btn-sm btn-primary" type="submit" name="save" value="Pinjam">
                  
                </td>
                </form>
              </tr>
              <?php $no++;endforeach; ?>
            </tbody>
          </table>
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
