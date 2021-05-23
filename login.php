<?php 
//file ini merupakan file login untuk mahasiswa
session_start();
include 'config/koneksi.php';

//cek login
if (isset($_POST['login'])) { //apabila tombol login dijalankan

//mendapatkan input dari pengguna
$username=$_POST['username'];
$password=$_POST['password'];

//mencek di database tabel admin adakah username dan passwordnya 
$login="SELECT * FROM admin WHERE username='$username'";
$cek=mysql_query($login);
$ketemu=mysql_num_rows($cek);

$login2="SELECT * FROM admin WHERE password='$password'";
$cek2=mysql_query($login2);
$ketemu2=mysql_num_rows($cek2);

$login3="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$cek3=mysql_query($login3);
$ketemu3=mysql_num_rows($cek3);

$r=mysql_fetch_array($cek3);

// menampilkan pesan gagal jika belum memasukan username dan password
if ($ketemu == 0 & $ketemu2 == 0){
echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
window.location = 'login.php'</script>";
}
// menampilkan pesan gagal jika username salah
else if ($ketemu == 0){
echo "<script> alert ('Username anda tidak valid ! Mohon periksa kembali.');
window.location = 'login.php'</script>";
}

// menampilkan pesan gagal jika password salah
else if ($ketemu2 == 0){
echo "<script> alert ('Password anda tidak valid ! Mohon periksa kembali.');
window.location = 'login.php'</script>";
}

//jika ketemu dibuat sesi loginnya
else {
//detail sesi loginnnya
  $_SESSION['id_admin'] = $r['id_admin'];
  $_SESSION['nama_lengkap'] = $r['nama_lengkap'];
  $_SESSION['no_hp'] = $r['no_hp'];
  $_SESSION['email'] = $r['email'];
  $_SESSION['username'] = $r['username'];
  $_SESSION['password'] = $r['password'];
  
  

                            
                  
//login berhasil
echo "<script> alert ('Login Berhasil');
window.location = 'admin.php'</script>";
}
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login_v1/images/aset.jpg);">
					<span class="login100-form-title-1">
						Halaman Login
					</span>
				</div>

				<form action="login.php" method="post" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" name="username" type="text" placeholder="Masukkan Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input name="password" type="password" class="input100" placeholder="Masukkan Password">
						<span class="focus-input100"></span>
					</div>
					


					

					<div class="login100-form-btn">
            <button name="login" type="submit" >
              Login
            </button>
					</div>
					<div class="login100-form-btn">
							<a href="index.php" class="txt1">
								<font color="black">Halaman Pengunjung</font>
							</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/js/main.js"></script>

</body>
</html>