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
  		<h3><i class="fas fa-user-graduate"></i> Nilai Mahasiswa Teknik Elektro</h3>  <hr class="bg-secondary">
		
        <h6 class="te mt-4"> Mahasiswa Jurusan : Teknik Elektro </h6>
	  	<table class="table table-striped mt-3 table-bordered">
	  		<thead class="table-dark">
			    <tr>
			      <th>No</th>
			      <th>Foto</th>
			      <th>Nim</th>
			      <th>Nama Mahasiswa</th>
			      <th>Jurusan</th>
			      <th>Semester</th>
			      <th>No HP</th>
			      <th>Email</th>
			      <th>Kelas</th>
			      <th>Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		include '../koneksi/koneksi.php';
			  		$lihat = mysqli_query($conn, "SELECT 
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
						INNER JOIN tb_kelas ON tb_mahasiswa.id_kelas=tb_kelas.id_kelas WHERE nama_jurusan='Teknik Elektro'order by nama_mahasiswa;") 
						or die(mysqli_error($conn));

						$jml = mysqli_num_rows($lihat);
						$nomor = 1;
						while($cetak = mysqli_fetch_array($lihat)){
						?>
			    <tr>
			      <td><?php echo $nomor++; ?></td>
			      <td><img src="../image/<?php echo $cetak['foto']; ?>" width="70px" height="70px" /></td>
			      <td><?php echo $cetak['nim']; ?></td>
			      <td><?php echo $cetak['nama_mahasiswa']; ?></td>
			      <td><?php echo $cetak['jenjang'];?><?php echo '-';?><?php echo $cetak['nama_jurusan'];?></td>
			      <td><?php echo $cetak['semester']; ?></td>
			      <td><?php echo $cetak['no_hp']; ?></td>
			      <td><?php echo $cetak['email']; ?></td>
			      <td><?php echo $cetak['nama_kelas']; ?></td>
			      <td>
                  <a class="btn btn-primary btn-sm" href="form_nilai.php?id_mahasiswa=<?php echo $cetak['id_mahasiswa']; ?>"> Input Nilai </a>
			      </td>
			    </tr>
			  <?php } ?>	
			  </tbody>
			</table>
			<h6> Total Data : <?php echo $jml ?> </h6>
            <a class="btn btn-danger btn-sm" href="nilai_mhs.php">Back</a>

  	</div>
  </div>
 
  <!-- javascript -->
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/dist/js/admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>