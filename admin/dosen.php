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
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-table/dist/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
	<link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">


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
  		<h3><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</h3>  <hr class="bg-secondary">
  		<a class="btn btn-primary btn-sm" href="form_dosen.php"><i class ="fas fa-plus "></i> Tambah Data</a>
			<a class="btn btn-success btn-sm" href="cetak_dosen.php"> <i class ="fas fa-print "></i> Cetak Data</a>	 
				
	  	<table class="table table-striped mt-3 table-bordered" style="width:100%"  id="table">
		  	
	  		<thead class="table-dark">
			    <tr>
			      <th>No</th>
			      <th>Foto</th>
			      <th>NIDN</th>
			      <th>Nama Dosen</th>
			      <th>No HP</th>
			      <th>Email</th>
			      <th>Alamat</th>
			      <th>Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
					include '../koneksi/koneksi.php';
					$lihat = mysqli_query($conn,"SELECT * FROM tb_dosen") or die(mysqli_error($conn));
					$jml = mysqli_num_rows($lihat);
					$nomor = 1 ;
					while($cetak = mysqli_fetch_array($lihat)){
					?>
			    <tr>
			      <td><?php echo $nomor++; ?></td>
				  <td><img src="../image/<?php echo $cetak['gambar']; ?>" width="50px" height="50px" /></td>
			      <td><?php echo $cetak['nidn']; ?></td>
			      <td><?php echo $cetak['nama_dosen']; ?></td>
			      <td><?php echo $cetak['no_hp']; ?></td>
			      <td><?php echo $cetak['email']; ?></td>
			      <td><?php echo $cetak['alamat']; ?></td>
			      <td>
			      	<a class="btn btn-primary btn-sm" href="read_dosen.php?id_dosen=<?php echo $cetak['id_dosen']; ?>"> <i class="fas fa-sliders-h" data-toggle="tooltip" title="Read"></i> </a> |
					<a class="btn btn-success btn-sm" href="edit_dosen.php?id_dosen=<?php echo $cetak['id_dosen']; ?>"> <i class="far fa-edit" data-toggle="tooltip" title="Edit"></i> </a> |
					<a class="btn btn-danger btn-sm" href="delete_dosen.php?id_dosen=<?php echo $cetak['id_dosen']; ?>"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus"></i>  </a>
			      </td>
			    </tr>
			   <?php } ?>
			  </tbody>
			</table>
			<h6> Total Data : <?php echo $jml ?> </h6>

  	</div>
  </div>
 
  <!-- javascript -->
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/dist/js/admin.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/export/bootstrap-table-export.min.js"></script>

</body>
</html>