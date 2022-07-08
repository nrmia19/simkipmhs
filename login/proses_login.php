<?php 

include '../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$ceklogin = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' ");

$jumUser = mysqli_num_rows($ceklogin);

if ($jumUser > 0){
	$getData = mysqli_fetch_array($ceklogin);
	// echo "Login Berhasil";

	$tipeUser = $getData['tipe_user'];

	if($tipeUser == "administrator"){
		echo "<script>window.alert('Sukses Login Sebagai Administrator')
		window.location ='../admin/index.php'</script>";
	} elseif ($tipeUser == "dosen") {
		echo "<script>window.alert('Sukses Login Sebagai Dosen')
		window.location ='../dosen/index.php'</script>";
	} else {
		echo "<script>window.alert('Sukses Login Sebagai Mahasiswa')
		window.location ='../mahasiswa/index.php'</script>";
	}
} else {
	echo "<script>window.alert('Gagal Login !! Username dan Password yang Anda Masukan Salah!')
		window.location ='login.php'</script>";
}



 ?>