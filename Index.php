<?php 
require_once "modul/modul.php"; 
getErrorLogin();
?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  	<script src="plugin/jquery-3.5.1.min.js"></script>
  	<script src="plugin/popper-1.16.0.min.js"></script>
  	<script src="plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

<!-- w3school online 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
-->

</head>

<body style="background-color: #000000;">

	<div class="container-fluid p-1 bg-white text-white">
		<div class="row">
			<div class="col-10">
				<img src="images/logo1.jpg" class="float-right" alt="perpus" width="930	" height="150">
			</div>
		</div>
	</div>

	<div class="container-fluid p-2 bg-black text-white">
		<div class="row">
			<div class="col-10">Vocational School Graduate Academy | VSGA</div>
			<div class="col-2"><span class="text-center">Hai <?php echo$_SESSION['sesi']; ?>!</span>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<div class="container-fluid p-1 bg-warning">
		<span class="text-black float-midle"><b> MENU:</b>&nbsp;&nbsp;</span> 
		<div class="btn-group">
			<a href="index.php?p=beranda" class="btn btn-outline-dark text-black" active><b>HOME</b></a>
			
			<div class="btn-group">
				<button type="button" class="btn btn-outline-dark text-black dropdown-toggle" id="dropdownDataMaster" data-toggle="dropdown" area-expanded="false"><b>DATA</b></button>
				<div class="dropdown-menu" aria-labelledby="dropdownDataMaster">
					<a class="dropdown-item" href="index.php?p=anggota">Anggota</a>
					<a class="dropdown-item" href="index.php?p=buku">Buku</a>	
				</div> 
			</div>

			<div class="btn-group">
				<button type="button" class="btn btn-outline-dark text-black dropdown-toggle" data-toggle="dropdown" id="dopdownDataTransaksi"><b>TRANSAKSI</b></button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index.php?p=transaksi-peminjaman">Peminjaman</a>
					<a class="dropdown-item" href="index.php?p=transaksi-pengembalian">Pengembalian</a>
				</div>
			</div>
			<a href="index.php?p=laporan-transaksi" class="btn btn-outline-dark text-black"><b>LAPORAN</b></a>
			<a href="logout.php" class="btn btn-outline-dark text-black"><b>LOGOUT</b></a>
		</div>		
	</div>

	<div class="container-fluid p-0 bg-white">
		<?php
			if (isset($_GET['p'])) {
				getPage ($_GET['p']);	
			}else{
				getPage ('beranda');
			}
		?>
	</div>

	<div class="container-fluid p-3 bg-black text-white">
		<p><h5>Sistem Informasi Perpustakaan (sipus) | Praktikum </h5></p>
		<p><h6><small>
		Kasus asli dari Kominfo & Panitia VSGA <br />
		Modifikasi oleh Yosua Kakase (Politeknik Negeri Nusa Utara) <br />
		Logmodif: menggunakan Bootsrap sederhana dan Mengubah Teknik Pemrograman dengan menggunakan konsep Subrutin / modular</small></h6></p>
	</div>

<!-- offline
	<script src="plugin/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
-->
</body>
</html>
