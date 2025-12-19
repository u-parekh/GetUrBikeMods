
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
      <li id="profile"><a class="active" href="profile.php"><i class="fa-solid fa-user"></i></a></li>
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

<section id="profile"> 
<div class="account-update">
    <h2 class="font-weight-bold text-center">Update Account Details</h2>
    <hr class="mx-auto">
</div>

<form id="update-info" method="post">  
  <table align="center">
    <tr>
      <div class="form-group">
        <td><label>Name</label></td>
        <td><input type="text" class="form-control" id="accont-name" name="name" placeholder="Name"/></td>
      </div>
    </tr>
    <tr>
      <div class="form-group">
        <td><label>Phone Number</label></td>
        <td><input type="text" class="form-control" id="accont-phone" name="phoneno" placeholder="Phone Number"/></td>
      </div>
    </tr>
    <tr>
      <div class="form-group">
        <td><label>Email</label></td>
        <td><input type="email" class="form-control" id="accont-email" name="email" placeholder="Email"/></td>
      </div>
    </tr>
    <tr>
      <div class="form-group">
        <td><label>Password</label></td>
        <td><input type="password" class="form-control" id="accont-password" name="password" placeholder="Password"/></td>
      </div>
    </tr>
    <tr>
      <div class="form-group">
        <br>
        <td align="right"><br><input type="submit" value="Update Details" class="btn" name="update" id="update-btn" ></td>
      </div>
    </tr>
  </table>
  <?php
  session_start() ;
  
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
if(isset($_POST['update'])){

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['name'];
    $phoneno=$_POST['phoneno'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //$userId = $_GET['register_id'];
    $email2 = $_SESSION['email'];

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
    
    // Validate password
    if (strlen($pass) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Confirm password match
  

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
        $sql= "UPDATE register SET `register_name`='$user',`register_phone`='$phoneno',`register_email`='$email',`register_password`='$pass',`register_confirm_password`='$pass' WHERE `register_email`='$email2'";

        if ($conn->query($sql) === TRUE) {
          echo "<p> <font color=purple> <center>You have successfully updated your profile</center></font></p>";
       } else {
              echo "Error updating record: " . $conn->error;
       }
      }
}
}

$conn->close();
?>
</form>
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
</body>
</html>