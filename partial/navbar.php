<?php
if($_SESSION['pjlogin'] == '0'):
?>
<nav id="nav-menu-container">
  <ul class="nav-menu">
    <li><a href="#hero">Home</a></li>
    <li><a href="#about">Tentang</a></li>
    <li><a href="#koleksi">Koleksi Buku</a></li>
		<li><a href="#signup">Sign Up</a></li>
    <li><a href="login.php">Login</a></li>
  </ul>
</nav>
<?php endif; ?>

<?php
if($_SESSION['pjlogin'] == 'member'):
?>
<nav id="nav-menu-container">
  <ul class="nav-menu">
    <li><a href="../pustakajendela">Home</a></li>
    <li><a href="pinjambuku.php">Pinjam Buku</a></li>
    <li><a href="profil.php">Profil</a></li>
    <li><a href="partial/logout.php">Logout</a></li>
  </ul>
</nav>
<?php endif; ?>