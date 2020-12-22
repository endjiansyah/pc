<section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Tentang PerpusKita</h2>
            <p>
      Perpustakaan Pustaka Jendela adalah perpustakaan umum yang terletak di Jl. Prof Sudarto, Tembalang, Semarang. Layanan yang ada di Perpustakaan Pustaka Jendela diantaranya adalah layanan pencarian buku online (OPAC), layanan sirkulasi, referensi, terbitan berkala, perpustakaan keliling, layanan anak, layanan online, layanan multimedia, dan layanan penggandaan atau fotocopy. Sedangkan fasilitas yang ada di perpustakaan diantaranya: ruangan ber-AC, ruang baca, ruang diskusi, BI Corner, tampilan koleksi buku baru, fasilitas multimedia, fasilitas percetakan, area lesehan, loker untuk menyimpan tas serta barang pribadi, televisi, charging spot ditiap meja, wi-fi, dan toilet.
      </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-book"></i></div>
              <h4 class="title"><a>Visi</a></h4>
              <p class="description">Terwujudnya masyarakat membaca dan belajar menuju masyarakat madani yang melek informasi.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-globe"></i></div>
              <h4 class="title"><a>Misi</a></h4>
              <p class="description">
        1.  Menciptakan dan mengembangkan kebiasaan membaca pada masyarakat.
              <br>2.  Pemerataan memperoleh informasi bagi seluruh lapisan masyarakat.
              <br>3.  Mengembangkan kemitraan di bidang perpustakaan , dokumentasi, dan informasi.
              <br>4.  Mengembangkan jaringan informasi, ilmu pengetahuan dan teknologi 
        serta budaya tersimpan dan tersebarluaskannya hasil budaya masyarakat 
        Semarang dan tentang Semarang.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-smile-o"></i></div>
              <h4 class="title"><a href="">Jam Pelayanan</a></h4>
              <p class="description">Senin - Kamis : 08.00-16.00
        <br>Jumat - Kamis : 08.00-11.00<br>Minggu : Libur</p>
            </div>
          </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    
    <!--==========================
      Koleksi Buku Section
    ============================-->
    <section id="koleksi">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Koleksi Buku</h3>
          <p class="section-description">Silahkan dipilih, dipinjam, dibaca koleksi buku dari PerpusKita! Di bawah ini termasuk buku yang sering dipinjam lho..</p>
        </div>

        <div class="row" id="event-wrapper">
          <div class="col-lg-3 col-md-6 event-item">
            <a href="">
              <img src="member/images/b1.jpg" alt="">
              <div class="details">
                <h4>Kancil Mencuri Ketimun Reborn</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 event-item">
            <a href="">
              <img src="member/images/b2.jpeg" alt="" height="253" width="199">
              <div class="details">
                <h4>2199 : The Return Of Dilan & Milea V7</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 event-item">
            <a href="">
              <img src="member/images/b3.jpg" alt="" height="253" width="199">
              <div class="details">
                <h4>Tip Ek 'n Pulpen</h4>
              </div>
            </a>
          </div>
      
        </div>

      </div>
    </section><!-- #event -->

    <!--==========================
      Sign Up Section
    ============================-->
  <?php if($_SESSION['pjlogin'] == '0'): ?>
    <section id="signup">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Sign Up</h3>
          <p class="section-description">Pengen pinjam buku? Pengen jadi member yang bisa terus-terusan baca di PustakaJendela? Skuy bikin akun Member kamu!</p>
        </div>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Kantor pusat kita di :<br>Tokyo RT 05 RW 02<br>Bulustalan, North Korea<br>535022</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>Untuk info lebih lanjut bisa<br>Email ke:<br>pustakajendela@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>Atau telpon ke :<br>+850 329 336 564</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="partial/proses_daftar_member.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="Full Name" placeholder="nama lengkap kamu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validation"></div>
                </div>

        <div class="form-group">
                  <input type="text" name="username" class="form-control" id="username" placeholder="isi username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

        <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="isi Password kamu" data-rule="password" data-msg="Please enter at least 6 chars" required/>
                  <div class="validation"></div>
                </div>

        <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="isi email kamu" data-rule="email" data-msg="Please enter a valid email" required/>
                  <div class="validation"></div>
                </div>

        <div class="form-group">
                  <input type="number" name="hp" class="form-control" id="hp" placeholder="isi nomor HP kamu" data-msg="Please enter your number phone"/>
                  <div class="validation"></div>
                </div>

        <div class="form-group">
                  <input type="text" name="tempat" class="form-control" id="Birth Place" placeholder="Tempat lahir" data-msg="Please enter your birth place" width="50%" required/>
                  <input type="date" class="form-control" name="tgl" id="Birth Date" placeholder="tanggal lahir" data-rule="date" data-msg="Please enter your birth date" width="50%" required/>
                  <div class="validation"></div>
                </div>

        <div class="form-group">
                  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="isi Alamatmu saat ini" required />
                  <div class="validation"></div>
                </div>
                
                <div class="text-center"><button type="submit">Sign Up</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #Sign Up -->
  <?php endif;?>
