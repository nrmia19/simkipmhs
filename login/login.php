<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
		<form action="proses_login.php" method="POST" class="border shadow p-3 rounded" style="width: 450px;">
			<h1 class="text-center p-3"> Form Login </h1>
		  <div class="mb-3">
		    <label for="username" class="form-label">Username</label>
		    <input type="text" class="form-control" id="username"  name="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" class="form-control" id="password"  name="password">
		  </div>
		  <div class="mb-0">
		  	  <label for="tipe_user" class="form-label">Pilih type user :</label>
		  </div>
			  <select class="form-select mb-3">
				  <option value="User">User</option>
				  <option value="admin">Admin</option>
				  <option value="dosen">Dosen</option>
				  <option value="mahasiswa">Mahasiswa</option>
			  </select>
		  <button type="submit" class="btn btn-primary">Login</button>
		  <p> Apakah anda belum punya akun? <a href="../register/register.php"> Register </a> </p> 
		</form>
	</div>

</body>
</html>