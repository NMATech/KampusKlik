<?php

if(isset($_GET['proses_data'])){
    // Mengambil data dari inputan dengan metode GET
    $var1 = $_GET['inputan_pertama'];
    echo $var1; // Menampilkan data yang diinputkan
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <!-- Form dengan metode GET -->
    <form action="" method="GET">
        <input type="text" name="inputan_pertama" value="">
        <button type="submit" name="proses_data">PROSES DATA</button>
    </form>
</body>
</html>
