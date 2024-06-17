<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama_mhs = $_POST["input1"];
    $npm_mhs = $_POST["input2"];
    $prodi_mhs = $_POST["input3"];

    $proses = mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mhs='$nama_mhs', npm_mhs='$npm_mhs', prodi_mhs='$prodi_mhs' WHERE id='$npm");
    if ($proses) {
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }
}

for ($x = 0; $x < $perulangan; $x++) {
    echo "Nama anda " . $nama_mhs . " Prodi anda adalah: " . $prodi_mhs . "<br>";
}
?>