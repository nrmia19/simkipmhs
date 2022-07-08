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

	$dos = mysqli_query($conn, "UPDATE tb_dosen SET gambar='$gambar',nidn='$nidn',nama_dosen='$nama_dosen',
    no_hp='$no_hp',email='$email',alamat='$alamat' WHERE id_dosen='$id_dosen'") 
    or die(mysqli_error($conn));

	echo "<script>window.alert('Data Berhasil Diubah')
	      window.location='#'</script>";

?>