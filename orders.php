<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Fetch order items — adjust based on your schema (e.g., orders table)
$result = $conn->query("SELECT * FROM cart"); // or JOIN with an orders table

$total = 0;
?>
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

    #thanks{
        font-family: "Audiowide", sans-serif;
        text-align:center;
        color:hsl(231, 27%, 49%);
        font-size: 28px;
        font-weight: 600;
        font-weight: bold;
    }
   
</style>


</head>
<body>
<?php
  session_start();
  
  // Check if the user is logged in, if
  // not then redirect them to the login page
  if (!isset($_SESSION['email'])) {
      header("Location: login.php");
      exit();
  }
  ?>
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
      <li id="scart"><a  href="cart2.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
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

<section id="topbanner" class="section-m1">
    <h2>Up to <span>40% off</span>-All Accessories</h2>
</section>

<section id="thanks">
    <p>Your Order Has Been Placed</p>
    <p>Thank You For Shopping With Us :)</p>
    <p>Your Order Will Arrive in 2-3 Days</p>
</section>

<section>
    <br>
</section>

<!--<section id="orders">
    <div class="orders-container">
        <h2 class="font-weight-bold text-center">Your Orders</h2>
        <hr class="mx-auto">
    </div>

    <table>
        <tr>
            <th>Product</th>
            <th>Date</th>
        </tr>
        <tr>
            <td>
                <div class="product-info">
                    <img src="assets/images/facegraphic-helmet.jpg" alt="helmet"/>
                    <div>
                        <p>SBH-17 Facegraphic-Helmet</p>
                        <span>1800</span>
                    </div>
                </div>
            </td>
            <td align="center">
                <span >2024-12-23</span>
            </td>
        </tr>
    </table>
</section>-->
<section id="cart" class="section-p1">
    <table width="100%">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): 
            $subtotal = $row['p_price'] * $row['p_quantity'];
            $total += $subtotal;
        ?>
    <tr>
        <td>
            <div class="product-info">
               <!-- <img src="assets/images/facegraphic-helmet.jpg"/>-->
                <div>
                    <p><?= htmlspecialchars($row['p_name']) ?></p>
                    <span> ₹<?= number_format($row['p_price'], 2) ?></span>
                    <br>
                    
                </div>
            </div>
        </td> 

        <td>
        <span> ₹<?= number_format($row['p_price'], 2) ?></span>
            <!--<a class="edit-btn" href="#">Edit</a>-->
        
        </td>
        <td>
            <span class="product-price"><?= $row['p_quantity'] ?></span>
        </td>

        <td style="text-align: righr;">
           ₹<?= number_format($subtotal, 2) ?>
        </td>
        
    </tr>   
    <?php endwhile; ?>
   <!--<tr>
        <td>
            <div class="product-info">
                <img src="assets/images/face-helmet-re2.jpg"/>
                <div>
                    <p>SBH-17 Facegraphic-Helmet</p>
                    <span>1800</span>
                    <br>
                    <a class="remove-btn" href="#">Remove</a>
                </div>
            </div>
        </td> 

        <td>
            <input type="number" value="1"/>
            <a class="edit-btn" href="#">Edit</a>
        
        </td>
        <td>
            <span class="product-price">1800</span>
        </td>
    </tr>   
    </table>

    <div id="cart-total">
        <table width="100%">
            <tr>
                <td><span>Subtotal</span></td>
                <td><span id="Subtotal">1800</span></td>
               
            </tr>
            <tr>
                <td><span>Shipping</span></td>
                <td><span>Free</span></td>
            </tr>
            <tr>
                <td><span>Total Amount:</span></td>
                <td><span id="total-amount">3600</span></td>
            </tr>-->
        </table>
    </div>
    <h4 id="total">Total: ₹ <?= number_format($total, ) ?></h4>
    
</section>
<br>
<br>


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