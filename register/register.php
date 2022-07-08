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
			<h1 class="text-center p-3"> Form Register </h1>
		  <div class="mb-3">
		    <label for="nama" class="form-label">Nama</label>
		    <input type="text" class="form-control" id="nama"  name="nama">
		  </div>
		  <div class="mb-3">
		    <label for="email" class="form-label">Email</label>
		    <input type="email" class="form-control" id="email"  name="email">
		  </div>
		  <div class="mb-3">
		    <label for="username" class="form-label">Username</label>
		    <input type="text" class="form-control" id="username"  name="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" class="form-control" id="password"  name="password">
		  </div>
		  <button type="submit" class="btn btn-primary">Register</button>
		  <p> Kembali ke Login <a href="../login/login.php"> Login </a> </p> 
		</form>
	</div>

</body>
</html>