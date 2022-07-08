<?php
include "../koneksi/koneksi.php";
$id_mahasiswa = $_GET['id_mahasiswa'];
$query = mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'") 
or die(mysqli_error($conn));

//mengalihkan halaman kembali ke index.php
echo "<script>window.alert('Data Berhasil Dihapus')
window.location='mahasiswa.php'</script>";
?>