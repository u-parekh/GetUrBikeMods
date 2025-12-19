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
if(isset($_POST['register'])){

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = trim($_POST['register-name']);
    $phoneno=$_POST['register-phoneno'];
    $email = trim($_POST['register-email']);
    $pass = $_POST['register-password'];
    $confirmPass = $_POST['register-confirm-password'];

    $errors = [];

    // Validate username
    if (empty($user)) {
        $errors[] = "Username is required.";
    }

    if(empty($phoneno))
      {
          $errors[]="Phone no is Required";
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
       // $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

        // Insert data into the database
       /* $stmt = $conn->prepare("INSERT INTO register (`register_id`, `register_name`, `register_phone`, `register_email`, `register_password`, `register_confirm_password`)  VALUES ('$user','$phoneno', '$email','$pass','$confirmPass')");
       // $stmt->bind_param("sss",$user,$phoneno, $email,$pass, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } 
        */
        $sql= "INSERT INTO register (`register_name`, `register_phone`, `register_email`, `register_password`, `register_confirm_password`) VALUES ('$user','$phoneno', '$email','$pass','$confirmPass')";


      if(mysqli_query($conn,$sql)){   
    echo "<br>You are registered sucssessfully<br>";
        }else{
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
}

$conn->close();
?>
