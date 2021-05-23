<?php 
session_start();
include 'config/koneksi.php';
error_reporting(0);
if (isset($_POST['update'])) { //apabila tombol simpan dijalankan maka update data dijalankan

$id_video=$_POST['id_video'];
$nama_video = $_POST['nama_video'];

 $lokasi_file    = $_FILES['cover']['tmp_name'];
 $nama_file      = $_FILES['cover']['name'];
 $tipe_foto      = $_FILES['cover']['type'];
 
if(empty($lokasi_file)){
	mysql_set_charset('utf8');
		$update="update video set nama_video='$nama_video' where id_video='$id_video'";
}
elseif (empty($nama_video)) {
     echo "<script> alert('Masukkan Nama video'); window.location='kelola_video.php';</script>";
}

elseif (!empty($lokasi_file)){
	 mysql_set_charset('utf8');
	if ($tipe_foto != "video/mp4"){
     echo "<script>window.alert('Proses Ubah Gagal, video Harus Format mp4');
       window.location='kelola_video.php'</script>";
	}else{
	move_uploaded_file($lokasi_file,'image/video/'.$nama_file);
	
		 $update="update video set nama_video='$nama_video', cover='$nama_file' where id_video='$id_video'";
}}
 $cek = mysql_query($update);
 
if($cek){ 
 echo "<script> alert('Data video Berhasil Diubah');
  window.location = 'kelola_video.php'</script>";
 }else{ 
 echo "<script> alert ('Data video Gagal Diubah');
window.location = 'kelola_video.php'</script>";
  }}
 
?>
