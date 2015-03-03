<!DOCTYPE html>
<?php 
include('cek-login.php');
include('config.php');
?>
<html lang="en">
<head>
<title>Mata Pelajaran | SMK Prakarya Internasional 52 Bandung</title>
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
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <nav>
          <ul id="menu">
            <li><a href="index.php">HOME</a></li>
            <li><a href="siswa.php">SISWA</a></li>
            <li><a href="kelas.php">KELAS</a></li>
            <li><a href="guru.php">GURU</a></li>
            <li><a href="akademik.php">AKADEMIK</a></li>
            <li><a href="mata_pelajaran.php">MAPEL</a></li>
            <li class="end"><a href="logout.php">LOGOUT</a></li>
          </ul>
        </nav>
        <ul id="icons">
          <li><a href="settings.php"><?php echo "<font color='white'>Selamat Datang, <strong>".$_SESSION['username']."</strong></font>"; ?></a></li>
          <li></li>
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
              <h2 class="pad_bot1">DATA MATA PELAJARAN</h2>
              <p class="pad_bot1">
              <p class="pad_bot1 pad_top2"><strong>Cari mata pelajaran:</strong>              </p>
              <form method="post" action="cari_mapel.php">
                <input type="text" class="textbox" name="txt_cari">
                <input type="submit" value="cari" class="cari">
              </form></p>
              <p class="pad_bot1 pad_top2"><strong>Menampilkan data mata pelajaran di SMK Prakarya Internasional 52 Bandung</strong></p>
              <p class="pad_bot1 pad_top2"><?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?></p>
              <table id="table-tampil" border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
        	<td>Id</td>
        	<td>Id Pelajaran</td>
        	<td>Mata Pelajaran</td>
        	<td>Kategori</td>
        	<td>Ajaran</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from mapel");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $data['id']; ?></td>
        	<td><?php echo $data['id_pelajaran']; ?><br></td>
        	<td><?php echo $data['mata_pelajaran']; ?></td>
        	<td><?php echo $data['kategori_pelajaran']; ?></td>
        	<td><?php echo $data['ajaran']; ?></img></td>
        	<td colspan="2"><a href="ediit_mapel.php?id=<?php echo $data['id']; ?>">Edit</a> || <a href="delete_mapel.php?id=<?php echo $data['no_induk']; ?>">Hapus</a></td>
            </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table> 
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div>
            <div class="pad_left1">
              <h2 class="pad_bot1">&nbsp;</h2>
            </div>
          </article>
          <article class="col2 pad_left2">
            <div class="pad_left1">
              <h2>TAMBAH MAPEL</h2>
            </div>
            <div class="wrapper">
              </p><form name="input_data_kelas" action="insert_mapel.php" method="post">
<table width="263" border="0" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td width="81">Id</td>
      <td width="3">:</td>
      <td width="149"><input id="input1" type="text" name="id" maxlength="20" required="required" /></td>
    </tr>
    <tr>
      <td>Id Pelajaran</td>
      <td>:</td>
      <td><input id="input1" type="text" name="id_pelajaran" maxlength="100" required="required" /></td>
    </tr>
    <tr>
      <td>Nama Mapel</td>
      <td>:</td>
      <td><select name="list_mapel" id="list_mapel">
        <option value="0">Pilih Kelas</option>
        <option value="Elektronika Dasar">Elektronika Dasar</option>
        <option value="Matematika">Matematika</option>
        <option value="Bhs. Indonesia">Bhs. Indonesia</option>
        <option value="Bhs. Inggris">Bhs. Inggris</option>
        <option value="Kewarganegaraan">Kewarganegaraan</option>
        <option value="Praktikum">Praktikum</option>
        <option value="Agama">Agama</option>
        <option value="Fisika">Fisika</option>
        <option value="Kimia">Kimia</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Troubleshooting">Troubleshooting</option>
        <option value="Jaringan Dasar">Jaringan Dasar</option>
        <option value="Jaringan Lanjut">Jaringan Lanjut</option>
        <option value="Kendaraan Dasar">Kendaraan Dasar</option>
        <option value="Kendaraan Lanjut">Kendaraan Lanjut</option>
        <option value="PLC Programming">PLC Programming</option>
        <option value="Elektronika Lanjut">Elektronika Lanjut</option>
      </select></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td>:</td>
      <td><select name="kategori_pelajaran" id="kategori_pelajaran">
        <option value="0">Pilih Kategori</option>
        <option value="MPDU">MPDU</option>
        <option value="Ekstrakulikuler">Ekstrakulikuler</option>
        <option value="Kejuruan">Kejuruan</option>
            </select></td>
    </tr>
    <tr>
      <td>Th. Ajaran</td>
      <td>:</td>
      <td><input id="input1" type="text" name="ajaran" maxlength="14" required="required" /></td>
    </tr>
    <tr>
      <td align="right" colspan="3"><input type="submit" name="submit1" value="tambah" id="submit1" /></td>
    </tr>
  </tbody>
</table>
<p>Tambah data anda</p>
</form>
            </div>
            
            <div class="wrapper pad_bot2"></div>
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