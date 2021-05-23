<?php
error_reporting(0);
include 'config/koneksi.php';
//bagian deklarasi 
$id = $_GET[id];


$sql = mysql_query("delete from galeri where id_galeri='$id'");
if ($sql == TRUE) {
echo "<script> alert ('Proses Hapus Galeri Berhasil');
window.location='kelola_galeri.php'; </script>";
} else {
echo "<script> alert ('Proses Hapus Galeri Gagal');
history.back(); </script>";
}?>