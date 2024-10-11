<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli('localhost', 'username', 'password', 'trade_customer'); // Replace with your credentials

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['email']; // Assuming the email is stored in the session

$stmt = $conn->prepare("SELECT name, mobile, email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($name, $mobile, $email);
$stmt->fetch();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

header {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

nav {
    display: flex;
    justify-content: center;
    background-color: #444;
}

nav a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
}

nav a:hover {
    background-color: #ddd;
    color: black;
}

main {
    padding: 20px;
}

p {
    background-color: white;
    padding: 15px;
    border: 1px solid #ddd;
    margin-bottom: 10px;
    border-radius: 5px;
}

h1 {
    font-size: 2em;
    margin-bottom: 10px;
}

strong {
    color: #555;
}
</style>
</head>
<body>
    <header>
        <h1>Profile of <?php echo htmlspecialchars($name); ?></h1>
    </header>

    <nav>
        <a href="index.php" class="dropdown-item">
            <i class="fas fa-home me-2"></i> Home
        </a>
    </nav>

    <main>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Mobile No:</strong> <?php echo htmlspecialchars($mobile); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    </main>
</body>
</html>
