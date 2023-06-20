
<style>
    /* style.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 2px;
}

h1 {
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 5px;
    border-radius: 2px;
    margin-bottom: 10px;
}
</style>
<h1>Form Mahasiswa</h1>
<form action="/form" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required><br>

    <label for="nim">NIM:</label>
    <input type="text" name="nim" id="nim" required><br>

    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" id="kelas" required><br>

    <label for="matakuliah">Mata Kuliah:</label>
    <input type="text" name="matakuliah" id="matakuliah" required><br>

    <label for="dosen">Dosen Pengampu:</label>
    <input type="text" name="dosen" id="dosen" required><br>

    <label for="asisten">Asisten Praktikum:</label>
    <input type="text" name="asisten" id="asisten" required><br>

    <button type="submit">Submit</button>
</form>

<?php
// process.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai yang dikirim melalui formulir
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $matakuliah = $_POST['matakuliah'];
    $dosen = $_POST['dosen'];
    $asisten = $_POST['asisten'];

    echo "<h3>Hasil Form</h3>";
    echo "Nama: " . $nama . "<br><br>";
    echo "NIM: " . $nim . "<br><br>";
    echo "Kelas: " . $kelas . "<br><br>";
    echo "Mata Kuliah: " . $matakuliah . "<br><br>";
    echo "Dosen Pengampu: " . $dosen . "<br><br>";
    echo "Asisten Praktikum: " . $asisten . "<br><br>";
}
?>

