<?php 
	// koneksi ke database
	include '../koneksi/koneksi.php';

	$kehadiran = $_POST['kehadiran'];
	$tugas = $_POST['tugas'];
	$quis = $_POST['quis'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];

	$query = mysqli_query($conn, "INSERT INTO tb_nilai VALUES ('', '$kehadiran', '$tugas', '$quis', '$uts', '$uas')") 
	or die(mysqli_error($conn));
	echo "<script> window.alert('Data Berhasil Ditambahkan')
		window.location = 'nilai_mhs.php'</script>";

?>