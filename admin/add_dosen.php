<?php 
	// koneksi ke database
	include '../koneksi/koneksi.php';

	$gambar = $_FILES['gambar']['name'];
	$nidn = $_POST['nidn'];
	$nama_dosen = $_POST['nama_dosen'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];

	$tmp_name = $_FILES['gambar']['tmp_name'];

	move_uploaded_file($tmp_name, "../image/". $gambar);

	$query = mysqli_query($conn, "INSERT INTO tb_dosen VALUES ('', '$gambar', '$nidn', '$nama_dosen', '$no_hp', '$email',
	 '$alamat' )") 
	or die(mysqli_error($conn));
	echo "<script> window.alert('Data Berhasil Ditambahkan')
		window.location = 'dosen.php'</script>";

?>