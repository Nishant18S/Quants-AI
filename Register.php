<?php
session_start();
$conn = new mysqli('localhost', 'username', 'password', 'trade_customer');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
        alert('Email is already registered. Please use a different email.');
        </script>";
    } else {
        // Store password as plain text (not recommended)
        $stmt = $conn->prepare("INSERT INTO users (name, mobile, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $mobile, $email, $password);
        
        if ($stmt->execute()) {
            echo "<script>
            alert('Registration successful! You can now <a href=\"login.php\">login</a>.');
          </script>";    
        } else {
            echo "Error: " . $stmt->error;
        }
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
    <title>Register for TradeX</title>
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
            width: 500px;
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

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #222;
            color: #fff;
            transition: border-color 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #5cb85c;
            outline: none;
        }

        .input-icon {
            position: relative;
        }

        .input-icon {
    position: relative;
}

.input-icon i {
    position: absolute;
    left: 10px; /* Space from the left for the envelope or lock icon */
    top: 50%;
    transform: translateY(-50%);
    color: #ccc;
    z-index: 1; /* Ensure the icon is above the input */
}

.input-icon input {
    width: 100%; /* Full width of the parent container */
    padding: 10px 30px 10px 30px; /* Space for left icon and right eye icon */
    border: 1px solid #444;
    border-radius: 4px;
    background-color: #222;
    color: #fff;
    transition: border-color 0.3s;
}

.password-toggle {
    position: absolute;
    right: 10px; /* Space from the right for the eye icon */
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #ccc; /* Icon color */
    z-index: 1; /* Ensure the icon is above the input */
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
        .form {
    display: flex; /* Use flexbox for horizontal alignment */
    justify-content: space-between; /* Space between the buttons */
    margin-top: 20px; /* Add some margin for spacing */
}

button {
    width: 48%; /* Adjust width so buttons fit nicely */
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

        .password-strength {
            margin-top: 10px;
            font-weight: bold;
        }
        .form-links
        {
            margin-left: 80px;
        }
        .form-links a
        {
            margin: 10px;
            color: #ff33a1;
        }
    </style>
</head>
<div class="container">
    <h1>Create a Free Account</h1>
    <form action="register.php" method="POST" onsubmit="return validateForm()">
    <div class="input-group">
    <label for="name">Name:</label>
    <div class="input-icon">
        <i class="fas fa-user"></i> <!-- Changed to a user icon -->
        <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
    </div>
</div>
<div class="input-group">
    <label for="mobile">Mobile No:</label>
    <div class="input-icon">
        <i class="fas fa-phone"></i> <!-- Changed to a phone icon -->
        <input type="tel" id="mobile" name="mobile" placeholder="Enter Your Mobile No." required>
    </div>
</div>

        <div class="input-group">
            <label for="email">Email ID:</label>
            <div class="input-icon">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Enter Your E-Mail ID: " required>
            </div>
        </div>
        <div class="input-group">
            <label for="password">Enter your Password:</label>
            <div class="input-icon">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your Password" required oninput="updatePasswordStrength()">
                <span class="password-toggle" onclick="togglePasswordVisibility('password')">
                    <i class="fas fa-eye" id="password-toggle-icon"></i>
                </span>
            </div>
        </div>
        <div class="input-group">
            <label for="repassword">Re-Enter your Password:</label>
            <div class="input-icon">
                <i class="fas fa-lock"></i>
                <input type="password" id="repassword" name="repassword" placeholder="Re-Enter your Password" required>
                <span class="password-toggle" onclick="togglePasswordVisibility('repassword')">
                    <i class="fas fa-eye" id="repassword-toggle-icon"></i>
                </span>
            </div>
        </div>
        <div id="password-strength" class="password-strength"></div>
        <div class="form">
            <button type="submit"><i class="fas fa-sign-in-alt"></i> Register</button>
            <button type="reset"><i class="fas fa-sync-alt"></i> Reset</button>
        </div>
        <br>
        <div class="form-links">
            <a href="login.php"><i class="fas fa-user-plus"></i> Login</a>
            <a href="forgot_password.html"><i class="fas fa-question-circle"></i> Forgot Password?</a>
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
        </div>
    </form>
</div>
<script>
    function togglePasswordVisibility(inputId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(`${inputId}-toggle-icon`);

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

    function updatePasswordStrength() {
        const password = document.getElementById('password').value;
        const strengthText = document.getElementById('password-strength');
        let strength = 'Weak';
        let color = 'red';

        if (password.length > 8) {
            strength = 'Medium';
            color = 'orange';
            if (password.match(/[A-Z]/) && password.match(/[0-9]/)) {
                strength = 'Strong';
                color = 'green';
            }
        }

        strengthText.textContent = `Password Strength: ${strength}`;
        strengthText.style.color = color;
    }

    function validateForm() {
        const password = document.getElementById('password').value;
        const repassword = document.getElementById('repassword').value;
        if (password !== repassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</body>
</html>
