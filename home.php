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
   <!-- <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css" >-->
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
#review p{
    font-family: "Audiowide", sans-serif;
    text-align : center;
    font-size: 18px;
    font-weight: 600;
    color:hsl(231, 27%, 49%);
    font-weight: bold;
}

#product1 h2{
    
    text-align : center;
    font-size: 28px;
    font-weight: 600;
    color:hsl(231, 27%, 49%);
    font-weight: bold;
}
#herobutton{
    text-decoration:none;
}
#lowerbanner{
    text-decoration:none;
}
#review{
    /*background: #E3E6F3;*/
}
#feedback{
    text-align : center;
    font-size: 22px;
    font-weight: 600;
    color:purple;
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
      <li><a class="active" href="home.php">Home</a></li>
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

<!--hero image-->
<section id="hero">
  <h2>Super Value  deals</h2>
  <h1>On all products</h1>
  <h4>Save more with <span>" GetUrBikeMods "</span></h4>
  <button><a href="product.php" id="herobutton">Shop Now</a></button>
</section>
<section>
    <br>
    <br>
</section>
<!-- Slide Show 
<section>
<a href="#img1">
  <img class="mySlides" src="assets/images/re.jpg" style="width: auto;">
</a>
<a href="#img2">
   <img class="mySlides" src="assets/images/re2.jpg" style="width: auto;">
</a>
<a href="#img3">
   <img class="mySlides" src="assets/images/re5.jpg" style="width: auto;">
</a>
</section>
-->

<!--Featured Product-->
<section id="product1" class="section-p1">
  <h2>Featured Products</h2>
  <div class="pro-container">
    <div class="pro">
      <a href="singleproduct.php"> <!--product desc page-->
        <img src="assets/images/facegraphic-helmet.jpg" alt="helmet">
      </a>
      <div class="des">
        <span>s3 helmet</span>
        <h5 id="prodname">SBH-17 Facegraphic-Helmet Blue-Black</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4 id="prodprice">1,800</h4>
      </div>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>

    <div class="pro">
      <a href="fp2.php"> <!--product desc page-->
        <img src="assets/images/handlebar-mirror-duke-pulser-ktm.jpg" alt="handlebar mirror">
      </a>
      <div class="des">
        <span>KTM Pulsar</span>
        <h5 id="prodname">Handlebar Mirrors</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          
        </div>
        <h4 id="prodprice">1,500</h4>
      </div>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>

    <div class="pro">
      <a href="fp3.php"> <!--product desc page-->
        <img src="assets/images/gloves-knee-elbow-gaurd.jpg" alt="gloves">
      </a>
      <div class="des">
        <span>Gloves & Gaurds</span>
        <h5 id="prodname">Pair of Gloves & Gaurds</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4 id="prodprice">2,000</h4>
      </div>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>
    <div class="pro">
      <a href="fp4.php"> <!--product desc page-->
        <img src="assets/images/led-indicator-re.jpg" alt="indicator">
      </a>
      <div class="des">
        <span>Royal Enfield</span>
        <h5 id="prodname">Four LED Indicator</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4 id="prodprice">2,500</h4>
      </div>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>

    <div class="pro">
      <a href="fp5.php"> <!--product desc page-->
        <img src="assets/images/rear-paddock-stand.jpg" alt="stand">
      </a>
      <div class="des">
        <span>YAMAHA R15</span>
        <h5 id="prodname">Rear Paddock Stand</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4 id="prodprice">1,000</h4>
      </div>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>

    <div class="pro">
      <a href="fp6.php"> <!--product desc page-->
        <img src="assets/images/windshield-visor-tvsronin.jpg" alt="windshield">
      </a>
      <div class="des">
        <span>TVS Ronin</span>
        <h5 id="prodname">Front Windshield Visor</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4 id="prodprice">1,400</h4>
      </div>
      <br>
      <br>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>

    <div class="pro">
      <a href="fp7.php"> <!--product desc page-->
        <img src="assets/images/side-mirror-light2.jpg" alt="side mirror light">
      </a>
      <div class="des">
        <span>KTM Duke 390</span>
        <h5 id="prodname">Side Mirror With Indicator Lights</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4 id="prodprice">2,000</h4>
      </div>
      <br>
      <br>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>

    <div class="pro">
      <a href="fp8.php"> <!--product desc page-->
        <img src="assets/images/handlebar-signallightjpg.jpg" alt="handlebar light">
      </a>
      <div class="des">
        <span>Royal Enfield</span>
        <h5 id="prodname">Handlebar Signal Light</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4 id="prodprice">1,200</h4>
      </div>
      <br>
      <br>
      <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
        <!--add to cart page-->
        <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
    </div>
  </div>
</section>

<section id="feedback">
    <br>
    <h2>Feedbacks</h2>
    <br>
</section>

<!--review-->
<section id="review">
  <div class="mySlides">
      <p>" Awesome work done by GetUrBikeMods in my Yamaha R15.Polite behaviour and great modification platform,You should definitely purchase items. "</p>
      <p>-Umang(Customer)</p>
  </div>
  <div class="mySlides">
      <p>" Definitely you should buy accessories from GetUrBikeMods if you want to upgrade your bike... I got custom graphics on my new bike.They did exactly as i wanted to be done. "</p>
      <p>-Dev(Customer)</p>
  </div>
  <div class="mySlides">
      <p>" I am thanking GetUrBikeMods to make my normal bike into the beast I was not assuming that my bike would change completely... When I saw my bike I was completely shocked with Amazement..! "</p>
      <p>-Kamal(Customer)</p>
  </div>
</section>
<section>
    <br>
    <br>
</section>

<!--banner-->
<section id="banner" class="section-m1">
  <h2>Up to <span>40% off</span>-All Accessories</h2>
  <button class="normal"><a href="product.php" id="lowerbanner">Explore More</a></button>
</section>


<!-- Footer -->
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