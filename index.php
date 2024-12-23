<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran TK</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Pendaftaran TK!</h1>
    
    <!-- Form Pendaftaran -->
    <form name="formDaftar" action="proses.php" method="POST" onsubmit="return validateForm()">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="usia">Usia:</label><br>
        <input type="number" id="usia" name="usia" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="30" required></textarea><br><br>

        <!-- Tombol Daftar -->
        <input type="submit" value="Daftar">
        
        <!-- Tombol Lihat Daftar Siswa -->
        <button type="button" onclick="window.location.href='daftar_siswa.php'">Lihat Daftar Siswa</button>
    </form>
    
    <!-- Validasi dengan JavaScript -->
    <script>
        function validateForm() {
            const nama = document.forms["formDaftar"]["nama"].value;
            const usia = document.forms["formDaftar"]["usia"].value;
            const alamat = document.forms["formDaftar"]["alamat"].value;

            if (nama == "" || usia == "" || alamat == "") {
                alert("Semua field harus diisi!");
                return false;
            }
            if (isNaN(usia) || usia <= 0) {
                alert("Usia harus berupa angka positif!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
