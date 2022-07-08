<?php
include "../koneksi/koneksi.php";
$id_jurusan = $_GET['id_jurusan'];
$query = mysqli_query($conn, "DELETE FROM tb_jurusan WHERE id_jurusan='$id_jurusan'") 
or die(mysqli_error($conn));

//mengalihkan halaman kembali ke index.php
echo "<script>window.alert('Data Berhasil Dihapus')
window.location='jurusan.php'</script>";
?>