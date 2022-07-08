<?php 
include '../koneksi/koneksi.php';
// menjumlahkan data pada tabel mahasiswa
$get1 = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
$jml = mysqli_num_rows($get1);

// menjumlahkan data pada tabel dosen
$get2 = mysqli_query($conn, "SELECT * FROM tb_dosen");
$jml2 = mysqli_num_rows($get2);

// menjumlahkan data pada tabel matkul
$get3 = mysqli_query($conn, "SELECT * FROM tb_matkul");
$jml3 = mysqli_num_rows($get3);

// menjumlahkan data pada tabel kelas
$get4 = mysqli_query($conn, "SELECT * FROM tb_kelas");
$jml4 = mysqli_num_rows($get4);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin Dashboard</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/dist/css/admin.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">

</head>
<body>

  <!-- navigasi -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-stop">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">SIMKIP Nilai Mahasiswa | <b>Fakultas Teknik Universitas ...</b></a>
	     	<div class="icon">
		      	<h5>
		      		<i class="fa fa-envelope mr-3" style="color: white;" data-toggle="tooltip" title="surat masuk"></i>
		      		<i class="fa fa-bell mr-3" style="color: white;" data-toggle="tooltip" title="notifikasi"></i>
		      		<a href="../index.php"><i class="fa fa-sign-out-alt mr-3" style="color: white;" data-toggle="tooltip" title="sign out"></i></a>
		      	</h5>
	      </div> 
	  </div>
  </nav>

  <div class="row no-gutters">

  	<!-- Sidebar kiri/ untuk menu-menu-->
 		<div class="col-md-2 bg-warning pr-3 pt-4">
	  		<ul class="nav flex-column mb-5" style="margin-left: 15px;">
			  <li class="nav-item">
			    <a class="nav-link active text-black" aria-current="page" href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a> <hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-black" href="mahasiswa.php"><i class="fas fa-user-graduate"></i> Daftar Mahasiswa</a> <hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-black" href="dosen.php"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a> <hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-black" href="matkul.php"><i class="fas fa-swatchbook"></i> Daftar Matkul</a> <hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-black" href="kelas.php"><i class="fas fa-house-user"></i> Daftar Kelas</a> <hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-black" href="jurusan.php"><i class="fas fa-users-cog"></i> Daftar Jurusan</a> <hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-black" href="nilai_mhs.php"><i class="fas fa-paper-plane"></i> Nilai Mahasiswa</a> <hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-black" href="transkrip.php"><i class="fas fa-paperclip"></i> Transkrip Nilai</a> <hr class="bg-secondary">
			  </li>
			</ul>
	  	</div>



  	<!-- halaman utama -->
  	<div class="col-md-10 p-5 pt-4">
  		<h3><i class="fas fa-tachometer-alt"></i> Dashboard</h3>  <hr class="bg-secondary">
	  		<div class="row text-white">
	  			<div class="card bg-dark" style="width: 15rem; margin-left: 12px;">
					  <div class="card-body">
					  	<div class="card-body-ikon">
					  		<i class="fas fa-user-graduate"></i>
					  	</div>
					    <h5 class="card-title text-white">Jumlah Mahasiswa</h5>
					    <div class="display-4" style="font-weight:bold;"><?php echo $jml ?></div>
					    <a href="mahasiswa.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a> 
					  </div>
					</div>
					<div class="card bg-dark" style="width: 15rem; margin-left: 10px;">
					  <div class="card-body">
					  	<div class="card-body-ikon">
					  		<i class="fas fa-chalkboard-teacher"></i>
					  	</div>
					    <h5 class="card-title text-white">Jumlah Dosen</h5>
					    <div class="display-4" style="font-weight:bold;"><?php echo $jml2 ?></div>
					    <a href="dosen.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a> 
					  </div>
					</div>
					<div class="card bg-dark" style="width: 15rem; margin-left: 10px;">
					  <div class="card-body">
					  	<div class="card-body-ikon">
					  		<i class="fas fa-swatchbook"></i>
					  	</div>
					    <h5 class="card-title text-white">Jumlah Matkul</h5>
					    <div class="display-4" style="font-weight:bold;"><?php echo $jml3 ?></div>
					    <a href="matkul.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a> 
					  </div>
					</div>
					<div class="card bg-dark" style="width: 15rem; margin-left: 10px;">
					  <div class="card-body">
					  	<div class="card-body-ikon">
					  		<i class="fas fa-house-user"></i>
					  	</div>
					    <h5 class="card-title text-white">Jumlah Kelas</h5>
					    <div class="display-4" style="font-weight:bold;"><?php echo $jml4 ?></div>
					    <a href="kelas.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a> 
					  </div>
					</div>
					
	  		</div>

  	</div>
  </div>
 
  <!-- javascript -->
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>