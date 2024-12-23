<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa Terdaftar</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
        </tr>
        <?php
        // Baca data dari file
        if (file_exists("data_siswa.txt")) {
            $file = fopen("data_siswa.txt", "r");
            while (($line = fgets($file)) !== false) {
                $data = explode(",", trim($line));
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                echo "</tr>";
            }
            fclose($file);
        } else {
            echo "<tr><td colspan='3'>Belum ada data siswa.</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Kembali ke Form Pendaftaran</a>
</body>
</html>
