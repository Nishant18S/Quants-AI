<?php
session_start();

$conn = new mysqli('localhost', 'username', 'password', 'trade_customer'); // Replace with your credentials

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($stored_name, $stored_password);
    $stmt->fetch();

    // Check password without hashing (not recommended)
    if ($stored_password && $password === $stored_password) {
        $_SESSION['name'] = $stored_name;
        $_SESSION['email'] = $email;
        echo "<script>
                alert('Login successful!');
                window.location.href = 'index.php';
              </script>";
        exit();
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}

$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login for TradeX</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(270deg, #ff5733, #33ff57, #3357ff, #ff33a1);
            background-size: 600% 600%;
            animation: gradient 15s ease infinite;
        }

        .container {
            width: 400px; /* Adjusted width for login */
            background-color: rgba(30, 30, 30, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.5s ease-in-out;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #ccc;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 10px; /* Space from the left for the icon */
            top: 50%;
            transform: translateY(-50%);
            color: #ccc; /* Icon color */
            z-index: 1; /* Ensure the icon is above the input */
        }

        .input-icon input {
            width: 100%; /* Full width of the parent container */
            padding: 10px 40px 10px 30px; /* Space for left icon */
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #222;
            color: #fff;
            transition: border-color 0.3s;
        }

        .input-icon input:focus {
            border-color: #5cb85c;
            outline: none;
        }

        .form {
            margin-top: 20px; /* Add some margin for spacing */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #4cae4c;
        }

        .form-links {
            text-align: center; /* Center the links */
            margin-top: 15px;
        }

        /* Background Gradient Animation */
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Fade In Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="Login.php" method="POST">
            <div class="input-group">
                <label for="email">Email ID:</label>
                <div class="input-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Enter Your E-Mail ID: " required>
                </div>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
                </div>
            </div>
            <div class="form">
                <button type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
            </div>
            <div class="form-links">
                <a href="forgot_password.html"><i class="fas fa-question-circle"></i> Forgot Password?</a>
                <br>
                <a href="Register.php"><i class="fas fa-user-plus"></i> Create an Account</a>
            </div>
        </form>
    </div>
</body>
</html>
