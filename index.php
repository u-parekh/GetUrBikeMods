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
    <a href="profile.php"><i class="fa-solid fa-user"></i></a>
    <a href="cart2.php"><i class="fa-solid fa-cart-shopping"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
  </div>
</section>

<section id="login">
    <div class="container text-center ">
        <h2 class="form-weight-bold">Login</h2>
    
    </div>
    <div class="mx-auto container">
        <form id="login-form" method="post">
            <div class="form-group">
                
                <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                <span class="error-message" id="emailError"></span>
            </div>
            <div class="form-group">
                
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                <span class="error-message" id="passwordError"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" id="login-btn" name="login" value="Login" />
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


if(isset($_POST['login'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute
    $stmt = $conn->prepare("SELECT register_password FROM register WHERE register_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($register_password);
        $stmt->fetch();

        if ($password === $register_password) {
            echo "Login successful";
            $sql= "INSERT INTO login (`email`, `password`) VALUES ('$email','$password')";


      if(mysqli_query($conn,$sql)){   
    echo "<br>Login sucssessfully<br>";
        }else{
            echo "Error: " . $error;
        }

            
            // Start the session and redirect to the dashboard or home page
            session_start();
            $_SESSION['email'] = $email;
            header("Location: home.php");
            exit();
        } else {
    echo "<p> <font color=red> Incorrect Password </font></p>";
            //echo "Incorrect password";
            
        }
    } else {
    echo "<p> <font color=red> Email not found </font></p>";
       
       
    }

    $stmt->close();
    $conn->close();
}
}
?>


            <div class="form-group">
              Don't have an account? <a id="register-url" class="btn" href="register.php">Register</a>
            </div>
        </form>
    </div>
</section>

<section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
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
        const form = document.getElementById('login-form');
        form.addEventListener('submit', function (e) {
            let isValid = true;

            // Email validation
            const email = document.getElementById('email');
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
            const password = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
            if (password.value.trim() === '') {
                isValid = false;
                password.classList.add('error');
                passwordError.textContent = 'Password is required';
            } else {
                password.classList.remove('error');
                passwordError.textContent = '';
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
