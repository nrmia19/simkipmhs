<?php
include "../koneksi/koneksi.php";
$id_matkul = $_GET['id_matkul'];
$query = mysqli_query($conn, "DELETE FROM tb_matkul WHERE id_matkul='$id_matkul'") 
or die(mysqli_error($conn));

//mengalihkan halaman kembali ke index.php
echo "<script>window.alert('Data Berhasil Dihapus')
window.location='matkul.php'</script>";
?>