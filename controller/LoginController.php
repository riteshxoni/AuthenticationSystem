<?php
require '../model/User.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authenticationsystem";
$conn;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    try {
        // 1. Fetch only the user by username
        $sql = "SELECT username, password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);

        $user = $stmt->fetch();

        // 2. Check if user exists and verify password against the stored hash
        if ($user && password_verify($password, $user['password'])) 
        {
            // SUCCESS: Start session and log user in
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: ../views/login.php?success=Login Successfull.");
            exit;
        } 
        else 
        {
            // FAILURE: Generic error message for security
            header("Location: ../views/login.php?error=Invalid username or password.");
            exit;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
