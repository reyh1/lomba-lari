<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="jobget.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="phone">Nomor HP:</label>
        <input type="tel" name="phone" required><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];

        // Proses validasi login (contoh sederhana, seharusnya terhubung ke database)
        if ($email == "contoh@email.com" && $password == "password123" && $phone == "123456789") {
            echo "<p>Login berhasil! Selamat datang, $email.</p>";
        } else {
            echo "<p>Login gagal. Mohon periksa kembali email, password, dan nomor HP Anda.</p>";
        }
    } 
    
    ?>
</body>
</html>
