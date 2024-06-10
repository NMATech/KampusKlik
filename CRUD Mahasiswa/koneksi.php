<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kuliah_pemrograman_web";
$port = "3308";

$koneksi = mysqli_connect($host, $user, $pass, $db, $port) or die(mysqli_error($koneksi));
?>
