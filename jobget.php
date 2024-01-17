<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Lomba Lari</title>
</head>
<body>
    <h2>Form Pendaftaran Lomba Lari</h2>
    <form action="jobget.php" method="get">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="kategori">Kategori Lomba:</label>
        <select name="kategori">
            <option value="5K">5K</option>
            <option value="10K">10K</option>
            <option value="21K">Half Marathon (21K)</option>
        </select><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br>

        <input type="submit" value="Daftar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nama = $_GET["nama"];
        $email = $_GET["email"];
        $kategori = $_GET["kategori"];
        $jenis_kelamin = $_GET["jenis_kelamin"];

        echo "<p>Terima kasih, $nama, telah mendaftar dalam kategori $kategori. Kami akan mengirim informasi lebih lanjut ke email: $email. Semoga sukses dalam lomba!</p>";
    } else {
        //  echo "<p>Maaf, metode pengiriman data tidak valid.</p>";
    }
    ?>
</body>
</html>
