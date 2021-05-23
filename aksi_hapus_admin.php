<?php
error_reporting(0);
?>
<?php

include 'config/koneksi.php';
//bagian deklarasi 
$id = $_GET[id];


$sql = mysql_query("delete from admin where id_admin='$id'");
if ($sql == TRUE) {
echo "<script> alert ('Proses Hapus data admin berhasil');
window.location='kelola_admin.php'; </script>";
} else {
echo "<script> alert ('Proses Hapus data admin Gagal');
history.back(); </script>";
}?>
