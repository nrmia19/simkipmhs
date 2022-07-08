<?php 
	// koneksi ke database
	include '../koneksi/koneksi.php';

	$foto = $_FILES['foto']['name'];
	$nim = $_POST['nim'];
	$nama_mahasiswa = $_POST['nama_mahasiswa'];
	$id_jurusan = $_POST['id_jurusan'];
	$semester = $_POST['semester'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
	$id_kelas = $_POST['id_kelas'];

	$tmp_name = $_FILES['foto']['tmp_name'];

	move_uploaded_file($tmp_name, "../image/". $foto);

	$query = mysqli_query($conn, "INSERT INTO tb_mahasiswa VALUES ('', '$foto', '$nim', '$nama_mahasiswa', '$id_jurusan', '$semester',
	 '$no_hp', '$email', '$id_kelas' )") 
	or die(mysqli_error($conn));
	echo "<script> window.alert('Data Berhasil Ditambahkan')
		window.location = 'mahasiswa.php'</script>";

?>