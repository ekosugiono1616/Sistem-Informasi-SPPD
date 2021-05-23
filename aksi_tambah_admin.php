<?php
include 'config/koneksi.php';
	session_start();

$nama_lengkap = $_POST['nama_lengkap'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$cekreg=mysql_query("select * from admin where email = '$email'");
if(mysql_num_rows($cekreg) > 0) {
	echo "<script>alert('Email $email sudah terdaftar');
	window.location='kelola_admin.php';</script>";
} else {

$query = mysql_query("INSERT INTO admin (nama_lengkap,email,no_hp, username,password) VALUES ('$nama_lengkap','$email','$no_hp','$username','$password')");
}
if($query==TRUE) {
	echo "<script> alert('Data Admin berhasil disimpan');
	window.location = 'kelola_admin.php'</script>";
} else {
	echo "<script> alert ('Data Admin Gagal disimpan');
	window.location = 'kelola_admin.php'</script>";
}
?>