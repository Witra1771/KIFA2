<style type="text/css">
	.akademik a{
		color: grey;
	}
	.akademik a:hover{
		color: blue;
	}
</style>
<div class="akademik" style="background-color: #d0f0f0; width: 100px; height: 345px; padding: 10px; position: -webkit-sticky; position: sticky; top: 45px; float: left;">
	<div style="border-bottom: 1px solid black; "><h2>Prodi</h2></div>
		<p><a href="index.php?page=akademik&file=akademik-industri">Industri</a></p>
		<p><a href="index.php?page=akademik&file=akademik-sipil">Sipil</a></p>
		<p><a href="index.php?page=akademik&file=akademik-informatika">Informatika</a></p>
</div>

<?php 
	if (isset($_GET['file'])) {
		$page = $_GET['file'];
		switch ($page) {
			case 'akademik-industri':
      				include "application/form/akademik-industri.php";
      				break;
			case 'akademik-sipil':
      				include "application/form/akademik-sipil.php";
      				break;
			case 'akademik-informatika':
      				include "application/form/akademik-informatika.php";
      				break;
			default:
      				include "application/form/akademik-industri.php";
      				break;
		}
	}
	else{
      				include "application/form/akademik-industri.php";
	}
?>