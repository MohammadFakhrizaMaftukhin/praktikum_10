<?php
session_start();

// Fungsi untuk memeriksa apakah pengguna sudah login
function is_logged_in() {
    return isset($_SESSION['user']);
}

// Fungsi untuk menangani pengecualian
function handle_exception($exception) {
    echo "Terjadi kesalahan: " . $exception->getMessage();
}

// Menentukan bahwa fungsi handle_exception akan menangani semua pengecualian
set_exception_handler('handle_exception');

// Proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Misalnya, lakukan validasi login sederhana di sini
    if ($username === 'fakhri' && $password === '1234') {
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        throw new Exception('Kombinasi username dan password salah');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

