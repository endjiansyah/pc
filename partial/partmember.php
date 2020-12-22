<section id="about">
      <div class="container">
<div class="container wow fadeInUp mt-5" id="buku">
        <div class="section-header">
          <h3 class="section-title">Daftar Buku Dipinjam</h3><a href="pinjambuku.php" class="btn btn-info float-right">PINJAM BUKU</a><br><br>
          <input class="form-control" id="myInput" type="text" placeholder="Filter..">
          <table class="table table-bordered">
            <thead class="table-secondary">
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jenis</th>
                <th>Tanggal Pinjam</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php
                $no = 1;
                $datab = mysqli_query($mysqli, "SELECT * FROM pinjam ra JOIN bibliography a ON ra.id_buku = a.id_buku");
                foreach($datab as $buku):
                  if($buku['id_member'] == $_SESSION['id']):
                ?>
                <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $buku['judul'];?></td>
                <td><?php echo $buku['jenis_buku'];?></td>
                <td><?php echo $buku['waktu_input'];?></td>
                <td><a href="partial/hapus.php?id_buku=<?php echo $buku['id_pinjam']?>">hapus</a></td>
              </tr>
              <?php $no++;endif;endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>

        </div>
    </section>

  