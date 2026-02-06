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
  $user = new User(0, $_POST['name'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['gender']);
  try {
    $sql = "INSERT INTO users (name, username, email, password, gender)VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $hashedPassword = password_hash($user->getPassword(), PASSWORD_BCRYPT);
    $stmt->execute([$user->getName(), $user->getUsername(), $user->getEmail(), $hashedPassword, $user->getGender()]);

    $stmt = null;
    header("Location: ../views/register.php?success=true");
    exit;
  } 
  catch (PDOException $e) 
  {
    $errorCode = $e->errorInfo[1];
    if ($errorCode == 1062) 
    {
      header("Location: ../views/register.php?error=Email already registered!");
    } 
    else 
    {
      header("Location: ../views/register.php?error=Something went wrong!");
    }
    exit;
  }
}
