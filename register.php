<!DOCTYPE html>
<html lang="eng">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <!--style css file-->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
<style> 
.form-group input.error {
            border-color: red;
        }
.error-message {
            color: red;
            font-size: 14px;
        } 
#logo{
    text-decoration: none;
    font-family: "Audiowide", sans-serif;
    font-size: 24px;
    font-weight: 600;
    color:hsl(231, 27%, 49%);
    font-weight: bold;
    transition: 0.3s ease;

}
</style>

</head>
<body>


<!--bootstrap script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--navigation bar header-->
<section id="header">
  <a href="home.php" class="font-effect-shadow-multiple" id="logo">GetUrBikeMods
    <!--img src="assets/images/logo-transparent-png2.png" class="logo" alt="GetUrBikeMods" style="height: 25px;width: 25px;">-->
  </a>

  <div>
    <ul id="navbar">
      <li><a href="home.php">Home</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li id="profile"><a href="profile.php"><i class="fa-solid fa-user"></i></a></li>
      <li id="scart"><a href="cart2.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
      <a href="#" id="close"><i class="far fa-times"></i></a>  <!--close for mobile-->
    </ul>
  </div>
  <!--Mobile View-->
  <div id="mobile">
    <a href="home.php"><i class="fa-solid fa-user"></i></a>
    <a href="cart2.php"><i class="fa-solid fa-cart-shopping"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
  </div>
</section>


<section id="register">
    <div class="container text-center ">
        <h2 class="form-weight-bold">Register</h2>
    
    </div>
    <div class="mx-auto container">
        <form  id="register-form" method="post" >
            <div class="form-group">
                
                <input type="text" class="form-control" id="register-name" name="register-name" placeholder="Name" required/>
                <span class="error-message" id="usernameError"></span>
            </div>
            <div class="form-group">
                
                <input type="tel" class="form-control" id="register-phoneno" name="register-phoneno" placeholder="Phone Number" required/>
                <span class="error-message" id="phoneError"></span>
            </div>
            <div class="form-group">
                
                <input type="text" class="form-control" id="register-email" name="register-email" placeholder="Email" required/>
                <span class="error-message" id="emailError"></span>
            </div>
            <div class="form-group">
                
                <input type="password" class="form-control" id="register-password" name="register-password" placeholder="Password" required/>
                <span class="error-message" id="passwordError"></span>
            </div>
            <div class="form-group">
                
                <input type="password" class="form-control" id="register-confirm-password" name="register-confirm-password" placeholder="Confirm Password" required/>
                <span class="error-message" id="confirmPasswordError"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" id="register-btn" name="register" value="Register" />
            
            </div>
<?php
// Database configuration
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "project"; 

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
    echo "<p> <font color=purple> You have successfully registered yourself </font></p>";
        }else{
            echo "Error: " . $error;
        }

    
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
}

$conn->close();
?>
            <div class="form-group">
                Do you have an account?<a id="login-url" class="btn" href="login.php">Login</a>
            </div>
        </form>
     

    </div>
</section>

<ssection>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</section>
<footer class="ft">
    <div class="col">
      <h4>Contact</h4>
      <div class="con">
        <p><strong>Address:</strong> 352/353, Silver Oak University, 370/371, near Bhavik Publication, Gota Gam, Gota, Ahmedabad, Gujarat 382481</p>
        <p><strong>Phone:</strong> 9773166755</p>
        <p><strong>Hours:</strong> 09:00 - 21:00, Mon-Sun</p>
      </div>
    </div>
  
    <div class="col">
        <h4>My Account</h4>
        <a href="login.php">Sign In</a>
        <a href="cart2.php">View Cart</a>
    </div>
  
    <div class="col">
      <h4>About</h4>
      <a href="aboutus.php">About Us</a>
      <a href="contact.php">Contact Us</a>
    </div>
  
    <div class="col">
      <h4>Follow Us</h4>
        <div class="icon">
            <a href="#"><i class="fa-brands fa-youtube" style="color: #ff0000;"></i></a>
            <a href="#"><i class="fa-brands fa-facebook" style="color: #0080ff;"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter" style="color: #74C0FC;"></i></a>
          </div>
    </div>
     
    <div class="copyright">
      <p>@2024-25 Project By U&U</p>
    </div>
   
</footer>
<!--bootstrap script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
<script>
        const form = document.getElementById('register-form');
        form.addEventListener('submit', function (e) {
            let isValid = true;

            // Username validation
            const username = document.getElementById('register-name');
            const usernameError = document.getElementById('usernameError');
            if (username.value.trim() === '') {
                isValid = false;
                username.classList.add('error');
                usernameError.textContent = 'Name is required';
            } else {
                username.classList.remove('error');
                usernameError.textContent = '';
            }
             
            //phoneno validation
            const phoneno = document.getElementById('register-phoneno');
            const phoneError = document.getElementById('emailError');
            const phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(phoneno.value.trim())) {
                isValid = false;
                phoneno.classList.add('error');
                phoneError.textContent = 'Invalid phone number';
            } else {
                phoneno.classList.remove('error');
                phoneError.textContent = '';
            }

            // Email validation
            const email = document.getElementById('register-email');
            const emailError = document.getElementById('emailError');
            const emailRegex = /^([a-z0-9_]+@[a-z0-9_]+\.[a-z]{2,3}$)/;
            if (!emailRegex.test(email.value.trim())) {
                isValid = false;
                email.classList.add('error');
                emailError.textContent = 'Invalid email address';
            } else {
                email.classList.remove('error');
                emailError.textContent = '';
            }

            // Password validation
            const password = document.getElementById('register-password');
            const passwordError = document.getElementById('passwordError');
            if (password.value.length < 6) {
                isValid = false;
                password.classList.add('error');
                passwordError.textContent = 'Password must be at least 6 characters';
            } else {
                password.classList.remove('error');
                passwordError.textContent = '';
            }

            // Confirm password validation
            const confirmPassword = document.getElementById('register-confirm-password');
            const confirmPasswordError = document.getElementById('confirmPasswordError');
            if (confirmPassword.value !== password.value) {
                isValid = false;
                confirmPassword.classList.add('error');
                confirmPasswordError.textContent = 'Passwords do not match';
            } else {
                confirmPassword.classList.remove('error');
                confirmPasswordError.textContent = '';
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>


</body>
</html>