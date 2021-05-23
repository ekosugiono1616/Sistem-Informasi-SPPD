<?php
$server = "localhost";
$user = "root";
$password = "";
$database ="pemweb_eko";

mysql_connect($server,$user,$password) or die ("koneksi gagal");
mysql_select_db($database) or die ("database tidak ditemukan");

?>