<?php
error_reporting(0);
include 'config/koneksi.php';
//bagian deklarasi 
$id = $_GET[id];


$sql = mysql_query("delete from video where id_video='$id'");
if ($sql == TRUE) {
echo "<script> alert ('Proses Hapus video Berhasil');
window.location='kelola_video.php'; </script>";
} else {
echo "<script> alert ('Proses Hapus video Gagal');
history.back(); </script>";
}
?>