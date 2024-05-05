<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password!= $confirm_password) {
        throw new Exception("Passwords do not match.");
    }

    try {
        $sql = "INSERT INTO users (username, password) VALUES (?,?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", $username, password_hash($password, PASSWORD_DEFAULT));
        $stmt->execute();
        $_SESSION["username"] = $username;
        header("Location: timeline.php");
    } catch (Exception $e) {
        echo "Error: ". $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Confirm Password: <input type="password" name="confirm_password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>