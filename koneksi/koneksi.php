<?php 
	$host = "localhost";
	$user = "root" ;
	$pass = "" ;
	$db_name = "db_simkip";

	// koneksi ke database
	$conn = mysqli_connect($host, $user, $pass, $db_name);

	if ($conn){
		// echo "koneksi ke database berhasil";
	} else {
		// echo "koneksi ke database gagal";
	}
            
 ?>