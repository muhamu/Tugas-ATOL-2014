<!DOCTYPE html>
<?php 
include('cek-login.php');
include('config.php');
?>
<html lang="en">
<head>
<title>Tambah Siswa | SMK Prakarya Internasional 52 Bandung</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.bg, .box2{behavior:url("js/PIE.htc");}</style>
<![endif]-->
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <nav>
          <ul id="menu">
            <li><a href="menu_utama.php">HOME</a></li>
            <li><a href="siswa.php">SISWA</a></li>
            <li><a href="kelas.php">KELAS</a></li>
            <li><a href="teachers.html">GURU</a></li>
            <li><a href="admissions.html">NILAI</a></li>
            <li><a href="admissions.html">CETAK RAPORT</a></li>
            <li class="end"><a href="logout.php">LOGOUT</a></li>
          </ul>
        </nav>
        <ul id="icons">
          <li><?php echo "<font color='white'>Selamat Datang, <strong>".$_SESSION['username']."</strong></font>"; ?></li>
          <li></li>
        </ul>
      </div>
      <div class="wrapper">
        <h1><a href="" id="logo">Learn Center</a></h1>
      </div>
      <div id="slogan"> Homepage<span>smk prakarya internasional 52 Bandung</span> </div>
    </header>
    <!-- / header -->
  </div>
</div>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2 class="pad_bot1">RUANGAN KELAS</h2>
              <p class="pad_bot1 pad_top2"><strong>Cari kelas anda:</strong>              </p>
              <form method="post" action="cari_kelas.php">
                <input type="text" class="textbox" name="txt_cari">
                <input type="submit" value="cari" class="cari">
              </form>
              </p>
              <p class="pad_bot1 pad_top2">
                <?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>
              </p>
              <table id="table-tampil" border="1" cellpadding="5" cellspacing="0">
                <thead>
                  <tr>
                    <td>No. Induk</td>
                    <td>Nama</td>
                    <td>Tgl Lahir</td>
                    <td>Alamat</td>
                    <td>Kelas</td>
                    <td>Angkatan</td>
                    <td>No Telpon</td>
                    <td>Opsi</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
	$query = mysql_query("select * from murid");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
                  <tr>
                    <td><?php echo $data['no_induk']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['tgl']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['angkatan']; ?></td>
                    <td><?php echo $data['no_telepon']; ?></td>
                    <td><a href="edit.php?id=<?php echo $data['no_induk']; ?>">Edit</a> || <a href="delete_kelas.php?id=<?php echo $data['no_induk']; ?>">Hapus</a> </td>
                  </tr>
                  <?php 
		$no++;
	} 
	?>
                </tbody>
              </table>
            </div>
            <div class="pad_left1">
              <h2 class="pad_bot1">&nbsp;</h2>
            </div>
          </article>
          <article class="col2 pad_left2">
            <div class="pad_left1">
              <h2>TAMBAH KELAS</h2>
            </div>
            <div class="wrapper">
              <p class="pad_top2"><form name="input_data_kelas" action="insert_siswa.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td>Id</td>
      <td>:</td>
      <td><input id="input1" type="text" name="id" maxlength="20" required="required" /></td>
    </tr>
    <tr>
      <td>No Induk</td>
      <td>:</td>
      <td><input id="input2" type="text" name="input" maxlength="20" required="required" /></td>
    </tr>
    <tr>
      <td>Nama Siswa</td>
      <td>:</td>
      <td><input id="input1" type="text" name="nama" maxlength="20" required="required" /></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><input id="input1" type="text" name="jenis_kelamin" maxlength="100" required="required" /></td>
    </tr>
    <tr>
      <td>Tgl Lahir</td>
      <td>:</td>
      <td><input id="input1" type="text" name="tgl" required="required" /></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td>:</td>
      <td><input id="input1" type="text" name="lahir" required="required" /></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><input id="input1" type="text" name="alamat" maxlength="14" required="required" /></td>
    </tr>
    <tr>
      <td align="right" colspan="3"><input type="submit" name="submit1" value="tambah" id="submit1" /></td>
    </tr>
  </tbody>
</table>
<p>Tambah data anda</p>
</form></p>
              <p class="pad_top2">&nbsp;</p>
              <p class="pad_top2">&nbsp;</p>
              <p class="pad_top2">&nbsp;</p>
            </div>
            <div class="wrapper"></div>
            <div class="wrapper pad_bot2">
              <p class="pad_top2">&nbsp;</p>
            </div>
          </article>
        </div>
      </div>
    </section>
    <!-- content -->
    <!-- footer -->
    <footer></footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<div align=center>Kelompok 10 - 2013/2014 ATOL<a href='http://all-free-download.com/free-website-templates/'></a></div>
</body>
</html>