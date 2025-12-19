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
#p{
    font-size: 28px;
    font-weight: 600;
    color:hsl(231, 27%, 49%);
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
<!--starting of nav-->
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

<!--Product Body Start-->
<section id="product1" class="section-p1">
    <h2 id="p">Products</h2>
    <div class="pro-container">
      <div class="pro">
        <a href="pro1.php"> <!--product desc page-->
          <img src="assets/images/face-helmet-re3.jpg" alt="helmet">
        </a>
        <div class="des">
          <span> Helmet</span>
          <h5 id="prodname">Facegraphic-Helmet (Blue-Red-White)</h5>
          <div class="star">
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
           
          </div>
          <h4 id="prodprice">1,700</h4>
        </div>
        <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
          <!--add to cart page-->
          <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
      </div>
  
      <div class="pro">
        <a href="pro2.php"> <!--product desc page-->
          <img src="assets/images/handlebar-guard-ktmjpg.jpg" alt="handlebar guard">
        </a>
        <div class="des">
          <span>KTM,Pulsar</span>
          <h5 id="prodname">Handlebar Gaurds</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 id="prodprice">1,600</h4>
        </div>
          <!--add to cart page-->
          <br>
          <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
          <!--add to cart page-->
          <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
      </div>
  
      <div class="pro">
        <a href="pro3.php"> <!--product desc page-->
          <img src="assets/images/bodycover-yamaha.jpg" alt="gloves">
        </a>
        <div class="des">
          <span>Bike Body Cover</span>
          <h5 id="prodname">Bike Cover</h5>
          <div class="star">
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
        <a href="pro4.php"> <!--product desc page-->
          <img src="assets/images/rearstand.jpg" alt="indicator">
        </a>
        <div class="des">
          <span>Bike Stand</span>
          <h5 id="prodname">Rear Paddock Stand</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 id="prodprice">1,800</h4>
        </div>
          <!--add to cart page-->
          <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
          <!--add to cart page-->
          <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
      </div>
  
      <div class="pro">
        <a href="pro5.php"> <!--product desc page-->
          <img src="assets/images/sticker-yamaha.jpg" alt="stand">
        </a>
        <div class="des">
          <span>YAMAHA R15</span>
          <h5 id="prodname">Bike Sticker</h5>
          <div class="star">
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
        <a href="pro6.php"> <!--product desc page-->
          <img src="assets/images/taillight-harly.jpg" alt="windshield">
        </a>
        <div class="des">
          <span>Harley</span>
          <h5 id="prodname">Tail-Light</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 id="prodprice">1,600</h4>
        </div>
          <!--add to cart page-->
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
          <!--add to cart page-->
          <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
      </div>
  
      <div class="pro">
        <a href="pro7.php"> <!--product desc page-->
          <img src="assets/images/signal-indicator3.jpg" alt="side mirror light">
        </a>
        <div class="des">
          <span>YAMAHA R15</span>
          <h5 id="prodname">Side Mirror With Indicator Lights</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 id="prodprice">2,000</h4>
        </div>
          <!--add to cart page-->
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
          <!--add to cart page-->
          <a href="cart2.php" onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
      </div>
  
      <div class="pro">
        <a href="pro8.php"> <!--product desc page-->
          <img src="assets/images/sticker-bike-helmet-all2.jpg" alt="handlebar light">
        </a>
        <div class="des">
          <span>Stickers</span>
          <h5 id="prodname">Bike Stickers</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 id="prodprice">800</h4>
        </div>
          <!--add to cart page-->
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <input type="number" style=" width: 50px;height: 47px;padding-left: 10px; font-size: 16px;margin-right: 10px;"id="productQty" value="1" min="1">
      <br>
      <br>
          <!--add to cart page-->
          <a onclick="addToCart()" id="cart"><i class="fa-solid fa-cart-shopping" style='font-size:18px;color:hsl(231, 27%, 49%)'></i></a>
      </div>
    </div>
</section>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="product.php">1</a></li>
    <li class="page-item"><a class="page-link" href="product_2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="product_2.php">3</a></li>
    <li class="page-item"><a class="page-link" href="product_2.php">Next</a></li>
  </ul>
</nav>


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
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
    </div>
  
    <div class="col">
      <h4>About</h4>
      <a href="#">About Us</a>
      <a href="#">Contact Us</a>
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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>
</html>