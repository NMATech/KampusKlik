<?php
include_once ("koneksi.php");

$query = "SELECT * FROM mahasiswa";

if (isset($_POST["cari"])) {
    $cari = $_POST["cari"];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama_mhs LIKE '$cari%' 
    -- OR npm_mhs LIKE '%$cari%' 
    -- OR prodi_mhs LIKE '%$cari%'");
} else if (isset($_POST["formPencarian"])) {
    $orderBy = $_POST["formPencarian"];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY '$orderBy'");
} else {
    $result = mysqli_query($koneksi, $query);
}
?>