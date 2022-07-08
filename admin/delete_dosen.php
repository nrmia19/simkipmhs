<?php
include "../koneksi/koneksi.php";
$id_dosen = $_GET['id_dosen'];
$query = mysqli_query($conn, "DELETE FROM tb_dosen WHERE id_dosen='$id_dosen'") 
or die(mysqli_error($conn));

//mengalihkan halaman kembali ke index.php
echo "<script>window.alert('Data Berhasil Dihapus')
window.location='dosen.php'</script>";
?>