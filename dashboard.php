<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login1.php');
    exit();
}
$username = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $username; ?>!</h2>
    <p>Ini adalah halaman dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
