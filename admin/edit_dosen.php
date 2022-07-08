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
	    <a class="navbar-brand" href="#">SIMKIP Nilai Mahasiswa | <b>Fakultas Teknik Uninus</b></a>
	     	<div class="icon ml-4 ml-auto">
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
	  		<ul class="nav flex-column ml-5 mb-5" style="margin-left: 15px;">
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
  		<h3><i class="fas fa-user-graduate"></i> Daftar Dosen</h3>  <hr class="bg-secondary">
  		<div class="cotainer">
  			<div class="content">
  				<h4> Form Input Data Dosen   </h4>
				  <?php 
						include '../koneksi/koneksi.php';

						$id_dosen = $_GET['id_dosen'];
						$update = mysqli_query($conn, "SELECT * FROM tb_dosen WHERE id_dosen = '$id_dosen'") 
						or die(mysqli_error($conn));
						$cetak = mysqli_fetch_array($update);
					?>
  				<form action="edit_aksi_dosen.php" method="post" class="form-horizontal mt-4">
  					<div class="row mb-3 form-group">
					    <div class="col-sm-5">
					      <input type="hidden" id="id_dosen" name="id_dosen" value="<?php echo $cetak['id_dosen'];?>" readonly>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Foto</label>
					    <div class="col-sm-5">
  							<input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo $cetak['gambar'];?>" required>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">NIDN</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="nidn" name="nidn" value="<?php echo $cetak['nidn'];?>" required>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Nama Dosen</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?php echo $cetak['nama_dosen'];?>" required>
					    </div>
					  </div>		
					  <div class="row mb-3 form-group">
					    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $cetak['no_hp'];?>" required>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="email" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-5">
					      <input type="email" class="form-control" id="email" name="email" value="<?php echo $cetak['email'];?>" required>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					    <div class="col-sm-5">
					    	<textarea class="form-control" id="alamat" name="alamat" rows="3" value="<?php echo $cetak['alamat'];?>" required></textarea>
					    </div>
					  </div>
					 
					  
					  <button type="submit" class="btn btn-primary btn-sm">
						Simpan
						</button>
						<button type="reset" class="btn btn-danger btn-sm">
						Reset
						</button>
					</form>
  			</div>
  		</div>

  	</div>
  </div>
 
  <!-- javascript -->
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>