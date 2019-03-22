<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="slide">
			<img src="assets/image/pemandangan2.jpg">
			<h1>TEKNIK</h1>
			<p>Informatika | Industri | Sipil</p><br>


			<div class="sisi">
				
			</div>

		</div>
		<div class="navigation">
      		<a href="index.php?page=home" class="home">Home</a>
			<a href="index.php?page=profil">Profil</a>
			<a href="index.php?page=akademik">Akademik</a>
			<a href="index.php?page=edokumen">E-dokumen</a>
			<a href="index.php?page=elearning">E-learning</a>
			<a href="index.php?page=login" class="login"> Log-in</a>
		</div>
		<div class="page">
			<div class="content">
				<?php 
					if (isset($_GET['page'])) {
						$page = $_GET['page'];

						switch ($page) {
							case 'home':
        						include "application/form/dashboard.php";
        						break;
							case 'akademik':
        						include "application/form/akademik.php";
        						break;
							case 'profil':
        						include "application/form/profil.php";
        						break;
							case 'edokumen':
        						include "application/form/edokumen.php";
        						break;
							case 'elearning':
        						include "application/form/elearning.php";
        						break;
							
							default:
        						include "application/form/dashboard.php";
        						break;
						}
					}
					else {
        						include "application/form/dashboard.php";
					}
				 ?>
			</div>
			<div class="terbaru">
				<div>
					<h2><u>Terbaru</u></h2><br>
					<p><a href="">Jadwal Seminar Tugas Akhir Periode Bulan Januari T.A 2018-2019</a></p>
					<p><a href="">Pedoman Penulisan Laporan Tugas Akhir Teknik Informatika</a></p>
					<p><a href="">Pedoman Penulisan Laporan Tugas Akhir Teknik Sipil</a></p>
					
				</div>
				<div>
				<h2><u>Lowongan Kerja</u></h2><br>
				<p><a href="">Lowongan Data Mining : Microsoft Corp.</a></p>
				<p><a href="">Lowongan Data Analis : Microsoft Corp.</a></p>
				<p><a href="">Lowongan Operator : Google inc.</a></p>
					
				</div>
				<div>
					<h2><u>Kontak</u></h2><br>
					<div>
						<div style="background-color: white; width: 40px; height: 40px; border: 1px solid grey; float: left;"></div>
						<div style="padding-left: 5px; float: left;">Call Us<br>(0263) 283578</div><br><br><br>
					</div>
					<div>
						<div style="background-color: white; width: 40px; height: 40px; border: 1px solid grey; float: left;"></div>
						<div style="padding-left: 5px; float: left;">E-mail Us<br>info@ftunsur.ac.id</div><br><br><br>
					</div>
					<div>
						<div style="background-color: white; width: 40px; height: 40px; border: 1px solid grey; float: left;"></div>
						<div style="padding-left: 5px; float: left;">Faxmile<br>(0263) 283578</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="bagian">
				<u><h2>Kontak</h2></u>
				<p>Phone : (0263) 283578</p>
				<p>Faxmile : (0263) 283578</p>
				<p>E-Mail : info@ftunsur.ac.id</p>
			</div>
			<div class="bagian">
				<u><h2>Blogroll</h2></u>
				<p><a href="">Dosen Pengajar</a></p>
				<p><a href="">Blog Dosen</a></p>
				<p><a href="">Jurnal</a></p>
			</div>
			<div class="bagian">
				<u><h2>Link Terkait</h2></u>
				<p><a href="" class="link-terkait">Universitas Suryakancana</a></p>
				<p><a href="" class="link-terkait">Fakultas Hukum</a></p>
				<p><a href="" class="link-terkait">Fakultas Keguruan Dan Ilmu Pendidikan</a></p>
				<p><a href="" class="link-terkait">Fakultas Pertanian</a></p>
				<p><a href="" class="link-terkait">Fakultas Agama Islam</a></p>
				<p><a href="" class="link-terkait">Pasca Sarajana Ilmu Hukum</a></p>
				<p><a href="" class="link-terkait">Pasca Sarjana Pendidikan Bahasa dan Sastra Indonesia</a></p>
			</div>
			<div class="bagian">
				<u><h2>Akademik</h2></u>
				<p><a href="">Evaluasi Dosen</a></p>
				<p><a href="">Tracer</a></p>
				<p><a href="">Labtif</a></p>
			</div>
		</div>
		<div class="copyright"><b>Copyright @ 2019 Fakultas Teknik Universitas Suryakancana</b></div>
	</div>	
</body>
</html>