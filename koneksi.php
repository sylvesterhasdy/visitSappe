<?php
date_default_timezone_set('Asia/Jakarta');

$sekarang = new DateTime();
$menit = $sekarang -> getOffset() / 60;

$tanda = ($menit < 0 ? -1 : 1);
$menit = abs($menit);
$jam = floor($menit / 60);
$menit -= $jam * 60;

$offset = sprintf('%+d:%02d', $tanda * $jam, $menit);

$host = "localhost";
$username = "root";
$password = "";
$databasename = "toko";
$connection = mysql_connect($host, $username, $password) or die("Kesalahan Koneksi … !!");
mysql_select_db($databasename, $connection) or die("Databasenya Error");
mysql_query("SET time_zone = '$offset'");
?>
