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
        #cart{
            text-decoration: none;
            color:#fff;
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
      <li><a class="active" href="product.php">Products</a></li>
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

<!--single product desc-->
<section id="prodetails" class="sexction-p1">
    <div class="single-pro-image">
        <img src="assets/images/bodycover-yamaha.jpg" alt="bike cover" width="100%" name="image" id="mainImg">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="assets/images/bodycover-re.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="assets/images/bodycover-yamaha.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="assets/images/bodycover-re2.jpg" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>

    

    <div class="single-pro-details">
        <h4>Bike Body Cover</h4>
        <h6 id="prodname">Bike Cover</h6>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h2 id="prodprice">2,000</h2>
        <br>
            <input type="number" id="productQty" value="1" min="1">
        
        <button class="normal" onclick="addToCart()" id="cart">Add To Cart</a></button>
        <h4>Product Details:</h4>
        <ul><li><span>Compatibility : All Two Wheeler standard size motorcycle, bike </span></li>
            <li><span>Made of micro fiber which prevents UV Rays, dust and other particulate matter entering your vehicle. </span></li>
            <li><span>Comes with a plastic clip to hold the cover tight during extreme winds  </span></li>
            <li><span>The inner soft fabric prevents from creating scratches on your bike's body </span></li>
            <li><span> Covers both left and right mirrors </span></li>
       </ul>
        
    </div>
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
<script>
   function addToCart() {
            const name = document.getElementById('prodname').innerText;
            const priceText = document.getElementById("prodprice").innerText;
            const price = parseFloat(priceText.replace(/,/g, ''));
            const quantity = parseInt(document.getElementById('productQty').value);

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "add_to_cart.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function () {
                if (xhr.status === 200) {
                  location.href = "cart2.php";
                }
            };
            xhr.send(`name=${name}&price=${price}&quantity=${quantity}`);
        }
  // Automatic Slideshow - change image every 3 seconds
  var myIndex = 0;
  carousel();
  
  function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
  }
  </script>
</body>
</html>