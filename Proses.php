<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST["nama"]);
    $usia = htmlspecialchars($_POST["usia"]);
    $alamat = htmlspecialchars($_POST["alamat"]);

    // Simpan data ke dalam file (simulasi database sederhana)
    $data = "$nama,$usia,$alamat\n";
    file_put_contents("data_siswa.txt", $data, FILE_APPEND);

    // Tampilkan pesan sukses
    echo "<h1>Data Pendaftaran</h1>";
    echo "Nama: " . $nama . "<br>";
    echo "Usia: " . $usia . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "<br><a href='index.php'>Kembali ke Form Pendaftaran</a>";
    echo "<br><a href='daftar_siswa.php'>Lihat Daftar Siswa</a>";
} else {
    echo "Form tidak valid.";
}
?>

