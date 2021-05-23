<?php 
error_reporting(0);
include 'config/koneksi.php';
  session_start();
 $nama_video = $_POST['id_video'];
 $nama_galeri = $_POST['nama_galeri'];
 $isi = $_POST['isi'];

 $lokasi_file    = $_FILES['foto']['tmp_name'];
 $nama_file      = $_FILES['foto']['name'];
 $tipe_foto      = $_FILES['foto']['type'];
 $direktori1 = "image/galeri/$nama_file";
  // Apabila ada gambar yang diupload

    
 $cek=mysql_query("select * from galeri where nama_galeri ='$nama_galeri'");
 if(mysql_num_rows($cek) > 0){
	echo "<script>alert('Nama Galeri $nama_galeri sudah terdaftar'); window.location='kelola_galeri.php';</script>";
	} else {
 if(empty($lokasi_file)){
	mysql_set_charset('utf8');
			$query = "INSERT INTO galeri (id_video, nama_galeri)VALUES ('$nama_video', '$nama_galeri')";
	}
	elseif (empty($nama_galeri)) {
     echo "<script> alert('Masukkan Nama Galeri'); window.location='tambah-kelola_galeri.php';</script>";
}
			
	 elseif(!empty($lokasi_file)){
		 mysql_set_charset('utf8');
	 if($tipe_foto != 'image/jpeg'){
			echo "<script>alert('Proses Tambah Gagal, foto Harus Format JPEG'); window.location='kelola_galeri.php';</script>";
		} else {
 move_uploaded_file($lokasi_file,'image/galeri/'.$nama_file);
 $query = "INSERT INTO galeri (id_video, nama_galeri, foto)VALUES ('$nama_video', '$nama_galeri', '$nama_file')";
		}
	 }		
 $hasil = mysql_query($query); 
 
 if($hasil){ 
  echo "<script> alert('Data galeri berhasil disimpan');
  window.location = 'kelola_galeri.php'</script>";
 }else{ 
 echo "<script> alert ('Data galeri Gagal disimpan');
window.location = 'kelola_galeri.php'</script>";
 }}
 
 ?>  	