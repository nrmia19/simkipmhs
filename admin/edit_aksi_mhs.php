<?php 
	// koneksi ke database
	include '../koneksi/koneksi.php';

	$id_mahasiswa = $_POST['id_mahasiswa'];
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

	$query = mysqli_query($conn, "UPDATE tb_mahasiswa SET foto='$foto',nim='$nim',nama_mahasiswa='$nama_mahasiswa',
    id_jurusan='$id_jurusan',semester='$semester',no_hp='$no_hp',email='$email',
    id_kelas='$id_kelas' WHERE id_mahasiswa='$id_mahasiswa'") 
    or die(mysqli_error($conn));

	echo "<script>window.alert('Data Berhasil Diubah')
	      window.location='mahasiswa.php'</script>";

?>