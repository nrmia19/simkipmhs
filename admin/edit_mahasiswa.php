<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin Dashboard</title>

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
	  		<ul class="nav flex-column ml-5 mb-5">
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
  		<h3><i class="fas fa-user-graduate"></i> Daftar Mahasiswa</h3>  <hr class="bg-secondary">
  		<div class="cotainer">
  			<div class="content">
  				<h4> Form Edit Data Mahasiswa   </h4>
  					<?php 
						include '../koneksi/koneksi.php';

						$id_mahasiswa = $_GET['id_mahasiswa'];
						$update = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'") 
						or die(mysqli_error($conn));
						$cetak = mysqli_fetch_array($update);
					?>
  				<form action="edit_aksi_mhs.php" method="post" class="form-horizontal mt-4" enctype="multipart/form-data">
  					<div class="row mb-3 form-group">
					    <div class="col-sm-5">
					      <input type="hidden" id="id_mahasiswa" name="id_mahasiswa" value="<?php echo $cetak['id_mahasiswa'];?>" readonly>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Foto</label>
					    <div class="col-sm-5">
  							<input type="file" class="form-control" id="foto" name="foto" value="<?php echo $cetak['foto'];?>" >
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Nim</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $cetak['nim'];?>" required>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?php echo $cetak['nama_mahasiswa'];?>" required>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Jurusan</label>
					    <div class="col-sm-5">
					      <select class="form-select" name="id_jurusan" id="select" value="<?php echo $cetak['id_jurusan'] ;?>"  required>
					      	<option value="">Jurusan</option>
					      		<?php 
					      			include '../koneksi/koneksi.php';
					      			$query = mysqli_query($conn, "SELECT *  FROM tb_jurusan GROUP BY nama_jurusan");
					      			while($data = mysqli_fetch_array($query)){
					      				echo "<option value=$data[id_jurusan] > $data[jenjang] - $data[nama_jurusan]</option>"; 
					      			}
					      		?>
					      </select>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Semester</label>
					    <div class="col-sm-5">
						<select name="semester" class="form-select" required>
							<option value="">Semester</option>
							<option value="1" <?php if($cetak['semester'] == '1'){echo 'selected' ;}?>>1</option>
							<option value="2" <?php if($cetak['semester'] == '2'){echo 'selected' ;}?>>2</option>
							<option value="3" <?php if($cetak['semester'] == '3'){echo 'selected' ;}?>>3</option>
							<option value="4" <?php if($cetak['semester'] == '4'){echo 'selected' ;}?>>4</option>
							<option value="5" <?php if($cetak['semester'] == '5'){echo 'selected' ;}?>>5</option>
							<option value="6" <?php if($cetak['semester'] == '6'){echo 'selected' ;}?>>6</option>
							<option value="7" <?php if($cetak['semester'] == '7'){echo 'selected' ;}?>>7</option>
							<option value="8" <?php if($cetak['semester'] == '8'){echo 'selected' ;}?>>8</option>
						</select>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $cetak['no_hp'];?>" >
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="email" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-5">
					      <input type="email" class="form-control" id="email" name="email" value="<?php echo $cetak['email'];?>">
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="text-input" class="col-sm-2 col-form-label">Kelas</label>
					    <div class="col-sm-5">
					      <select class="form-select" name="id_kelas" id="id_kelas">
					      	<option value="">Kelas</option>
					      		<?php 
					      			include '../koneksi/koneksi.php';
					      			$query = mysqli_query($conn, "SELECT *  FROM tb_kelas GROUP BY nama_kelas");
					      			while($data = mysqli_fetch_array($query)){
					      				echo "<option value=$data[id_kelas] > $data[nama_kelas]</option>";
					      			}
					      			?>
					      </select>
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