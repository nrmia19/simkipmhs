<?php 
	include '../koneksi/koneksi.php';

	//mengambil data
	$nama_kelas = $_POST['nama_kelas'];

	$query = mysqli_query($conn, "INSERT INTO tb_kelas VALUES ('', '$nama_kelas')") 
	or die(mysqli_error($conn));

	echo "<script> window.alert('Data Berhasil Ditambahkan')
		window.location='kelas.php'</script>";
?>