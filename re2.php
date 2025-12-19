<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = "";     // Replace with your database password
$dbname = "project"; // Replace with your database name

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    $errors = [];

    // Validate username
    if (empty($user)) {
        $errors[] = "Username is required.";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password
    if (strlen($pass) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Confirm password match
    if ($pass !== $confirmPass) {
        $errors[] = "Passwords do not match.";
    }

    // Check for errors
    if (empty($errors)) {
        // Hash the password
        $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $user, $email, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}

$conn->close();
?>
