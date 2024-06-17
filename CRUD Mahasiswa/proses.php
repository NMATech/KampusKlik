<?php
include "koneksi.php";

if (isset($_POST["proses"])) {
    $nama_mhs = $_POST['input1'];
    $npm_mhs = $_POST['input2'];
    $prodi_mhs = $_POST['input3'];
    $perulangan = $_POST['ulangi'];
    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mhs, npm_mhs, prodi_mhs) VALUES ('$nama_mhs', '$npm_mhs', '$prodi_mhs')") or die(mysqli_error($koneksi));
    $huruf_mutu = '';

    if ($proses) {
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }

    for ($x = 0; $x < $perulangan; $x++) {
        echo "Nama anda " . $nama_mhs . " Prodi anda adalah: " . $prodi_mhs . "<br>";
    }
}
?>