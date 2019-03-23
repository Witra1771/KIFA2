<style type="text/css">
	.elearning a{
		color: grey;
	}
	.elearning a:hover{
		color: blue;
	}
	.elearning{
		background-color: #d0f0f0;
		width: 100px;
		height: 345px;
		padding: 10px;
		position: -webkit-sticky;
		position: sticky;
		top: 45px;
		float: left;
	}
</style>
<div class="elearning">
	<div style="border-bottom: 1px solid black; "><h2>Learning</h2></div>
		<p><a href="index.php?page=elearning&file=kelas">Kelas</a></p>
		<p><a href="index.php?page=elearning&file=materi">Materi</a></p>
</div>

<?php 
	if (isset($_GET['file'])) {
		$page = $_GET['file'];
		switch ($page) {
			case 'kelas':
      				include "application/form/kelas.php";
      				break;
			case 'dosen':
      				include "application/form/dosen.php";
      				break;
			case 'materi':
      				include "application/form/materi.php";
      				break;
			default:
      				include "application/form/kelas.php";
      				break;
		}
	}
	else{

      				include "application/form/kelas.php";
	}
?>