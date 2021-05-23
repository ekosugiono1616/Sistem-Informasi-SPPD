<?php 
error_reporting(0);
include 'config/koneksi.php';
  session_start();
$nama_video = $_POST['nama_video'];

 $lokasi_file    = $_FILES['cover']['tmp_name'];
 $nama_file      = $_FILES['cover']['name'];
 $tipe_foto      = $_FILES['cover']['type'];
 $direktori1 = "image/video/$nama_file";
  // Apabila ada gambar yang diupload

    
 $cek=mysql_query("select * from video where nama_video ='$nama_video'");
 if(mysql_num_rows($cek) > 0){
	echo "<script>alert('Nama video $nama_video sudah terdaftar'); window.location='kelola_video.php';</script>";
	} else {
 if(empty($lokasi_file)){
	mysql_set_charset('utf8');
			$query = "INSERT INTO video (nama_video)VALUES ('$nama_video')";
	}
	elseif (empty($nama_video)) {
     echo "<script> alert('Masukkan Nama video'); window.location='kelola_video.php';</script>";
}
			
	 elseif(!empty($lokasi_file)){
		 mysql_set_charset('utf8');
	 if($tipe_foto != 'video/mp4'){
			echo "<script>alert('Proses Tambah Gagal, video Harus Format mp4'); window.location='kelola_video.php';</script>";
		} else {
 move_uploaded_file($lokasi_file,'image/video/'.$nama_file);
 $query = "INSERT INTO video (nama_video, cover)VALUES ('$nama_video', '$nama_file')";
		}
	 }		
 $hasil = mysql_query($query); 
 
 if($hasil){ 
  echo "<script> alert('Data video berhasil disimpan');
  window.location = 'kelola_video.php'</script>";
 }else{ 
 echo "<script> alert ('Data video Gagal disimpan');
window.location = 'kelola_video.php'</script>";
 }}
 
 ?>  