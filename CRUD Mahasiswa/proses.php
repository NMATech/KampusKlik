<?php
include "koneksi.php";

if(isset($_POST["proses"])){
    $nama_mhs = $_POST['input1'];
    $prodi_mhs = $_POST['input2'];
    $perulangan = $_POST['ulangi'];
    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mhs, prodi_mhs) VALUES ('$nama_mhs', '$prodi_mhs')") or die(mysqli_error($koneksi));
    $huruf_mutu = '';
    
    if($proses){
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }

    for ($x = 0; $x < $perulangan; $x++) {
        echo "Nama anda " . $nama_mhs . " Prodi anda adalah: " . $prodi_mhs . "<br>";
    }
}
?>
