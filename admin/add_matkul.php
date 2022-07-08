<?php 
	include '../koneksi/koneksi.php';

	$kd_matkul = $_POST['kd_matkul'];
	$nama_matkul = $_POST['nama_matkul'];
	$sks = $_POST['sks'];
	$id_dosen = $_POST['id_dosen'];

	$query = mysqli_query($conn, "INSERT INTO tb_matkul VALUES ('', '$kd_matkul', '$nama_matkul', '$sks', '$id_dosen')") 
	or die(mysqli_error($conn));

	echo "<script> window.alert('Data Berhasil Ditambahkan')
		window.location='matkul.php'</script>";
?>