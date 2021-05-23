           <?php 
//error_reporting(0);
include 'config/koneksi.php';
  session_start();
  mysql_set_charset('utf8');

$id_admin = $_POST['id_admin'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$jk =$_POST['jk'];
  
  $update=mysql_query("update admin set 
  	nama_lengkap='$nama_lengkap',
  	no_hp='$no_hp',
  	email='$email',
  	username='$username',
  	password='$password',
  	jk='$jk' 
  	where id_admin='$id_admin'");

if($update){

 
	echo "<script> alert ('admin berhasil di ubah');
	window.location = 'kelola_admin.php'</script>";
	} else {
		echo "<script> alert ('admin gagal di ubah');
		window.location = 'kelola_admin.php'</script>";
}
?>