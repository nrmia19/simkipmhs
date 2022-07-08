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
				  <?php 
						include '../koneksi/koneksi.php';

						$id_mahasiswa = $_GET['id_mahasiswa'];
						$ambil = mysqli_query($conn, "SELECT 
						tb_mahasiswa.id_mahasiswa, 
						tb_mahasiswa.foto,
						tb_mahasiswa.nim,
						tb_mahasiswa.nama_mahasiswa,
						tb_mahasiswa.id_jurusan,
						tb_mahasiswa.semester,
						tb_mahasiswa.no_hp,
						tb_mahasiswa.email,
						tb_mahasiswa.id_kelas,
						tb_jurusan.nama_jurusan,
						tb_jurusan.jenjang,
						tb_kelas.nama_kelas
						FROM tb_mahasiswa INNER JOIN tb_jurusan ON tb_mahasiswa.id_jurusan=tb_jurusan.id_jurusan 
						INNER JOIN tb_kelas ON tb_mahasiswa.id_kelas=tb_kelas.id_kelas WHERE id_mahasiswa='$id_mahasiswa';") 
						or die(mysqli_error($conn));
						while($cetak = mysqli_fetch_array($ambil)){
					?>
					<h5> Tambah Data Nilai Mahasiswa Jurusan <?php echo $cetak['nama_jurusan'];?> </h5>
				<form class="form-horizontal mt-4">
				<div class="row mb-3 form-group">
					    <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Pilih Mata Kuliah</label>
					    <div class="col-sm-5">
						<select class="form-select" name="id_matkul" id="id_matkul">
					      	<option value="">Mata Kuliah</option>
					      		<?php 
									include '../koneksi/koneksi.php';
									$query = mysqli_query($conn, "SELECT * FROM tb_matkul GROUP BY id_matkul");
									while ($data = mysqli_fetch_array($query)){
									echo "<option value='$data[id_matkul]'> $data[kd_matkul] - $data[nama_matkul]</option>";
									}
								?>
					      </select>
					    </div>
					  </div>
				</form>
  				<form action="" method="post" class="form-horizontal mt-5">
					  <div class="row mb-3 form-group">
					    <label for="nim" class="col-sm-2 col-form-label">Nim</label>
					    <div class="col-sm-5">
  							<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $cetak['nim'];?>" readonly>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?php echo $cetak['nama_mahasiswa'];?>" readonly>
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="kehadiran" class="col-sm-2 col-form-label">Nilai Kehadiran</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="kehadiran" name="kehadiran" placeholder="Nilai Kehadiran" onkeyup="sum();">
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="tugas" class="col-sm-2 col-form-label">Nilai Tugas</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="tugas" name="tugas" placeholder="Nilai Tugas" onkeyup="sum();">
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="quis" class="col-sm-2 col-form-label">Nilai Quiz</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="quis" name="quis" placeholder="Nilai Quis" onkeyup="sum();">
					    </div>
					  </div>
					  <div class="row mb-3 form-group">
					    <label for="uts" class="col-sm-2 col-form-label">Nilai UTS</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="uts" name="uts" placeholder="Nilai UTS" onkeyup="sum();">
					    </div>
					  </div>
					   <div class="row mb-3 form-group">
					    <label for="uas" class="col-sm-2 col-form-label">Nilai UAS</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="uas" name="uas" placeholder="Nilai UAS" onkeyup="sum();">
					    </div>
					  </div>
					   <div class="row mb-3 form-group">
					    <label for="nilai_akhir" class="col-sm-2 col-form-label">Nilai Akhir</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" placeholder="Nilai Akhir">
					    </div>
					  </div>
					  <?php } ?>
						
					  <button type="submit" class="btn btn-primary btn-sm">
						Simpan
						</button>
						<button type="reset" class="btn btn-danger btn-sm">
						Batal
						</button>
						
					</form>
  			</div>
  		</div>

  	</div>
  </div>
 
  <!-- javascript -->
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
	function sum(){
		var nkehadiran = document.getElementById('kehadiran').value;
		var ntugas = document.getElementById('tugas').value;
		var nquis = document.getElementById('quis').value;
		var nuts = document.getElementById('uts').value;
		var nuas = document.getElementById('uas').value;
		var nakhir = parseInt(nkehadiran)* 0.10 + parseInt(ntugas)* 0.10 + parseInt(nquis)* 0.10 + parseInt(nuts)* 0.30 + parseInt(nuas)* 0.40 ;
		if (!isNaN(nakhir)){
			document.getElementById('nilai_akhir').value=nakhir;
		}
	}
	</script>
</body>
</html>