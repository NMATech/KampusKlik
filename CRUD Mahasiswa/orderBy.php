<?php
include_once ("koneksi.php");

$query = "SELECT * FROM mahasiswa";

if (isset($_POST["formPencarian"])) {
    $orderBy = $_POST["formPencarian"];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama_mhs ORDER BY '$orderBy'");
} else {
    $result = mysqli_query($koneksi, $query);
}
?>