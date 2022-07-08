<?php 
	// koneksi ke database
	include '../koneksi/koneksi.php';

	// mengambil data
	$kd_jurusan = $_POST['kd_jurusan'];
	$nama_jurusan = $_POST['nama_jurusan'];
	$jenjang = $_POST['jenjang'];

	//menginput data ke database
	$query = mysqli_query($conn, "INSERT INTO tb_jurusan VALUES ('', '$kd_jurusan', '$nama_jurusan', '$jenjang')") 
	or die(mysql_error($conn));

	echo "<script> window.alert('Data Berhasil Ditambahkan')
		window.location='jurusan.php'</script>";
?>