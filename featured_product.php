<?php

$stmt = $conn->prepare("SELECT * FROM products LIMIT 4");

$stmt->execute();

$featured_products = $stmt->get_result();




// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
if(isset($_POST['register']))
 /* $err1="";
  $err2="";
  $err3="";
  $err4="";
 // if(isset($_POST['submit']))
 if($_SERVER["REQUEST_METHOD"]=="POST") 
 {
      if(empty($_POST['name']))
      {
          $err1="User Name is Required";
      
      if(strlen($_POST['name'])<='5'){
          $err1="lenght should be greater than 5";
      }
       if(!empty($_POST['name'])) {                  
           $name=$_POST['name'];
          if(preg_match("/^([a-zA-z]+$)/",$name)){
              echo $name;
              echo "<br><br>"; 
          }
          else
          {
              $err1="Only Characters Are Allow";
          }
      }
  }
  

      

      if(empty($_POST['password']))
      {
          $err2="Password is Required";
      }
      if(!empty($_POST['password'])&&($_POST["password"]==$_POST["confirm-password"])){
          $password=$_POST['password'];
      $confirmpassword=$_POST['confirm-password'];

      if(preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/",$password)) {
              echo $password;
              echo "<br><br>";
              echo $confirmpassword;
          }
          else{
              $err2="Password is not Strong";
          }
       }
      
      if(empty($_POST['email']))
      {
          $err3="Email is Required";
      }
      else{
          $email=$_POST['email'];
          if(preg_match("/^([a-z0-9_]+@[a-z0-9_]+\.[a-z]{2,3}$)/",$email)){
              echo $email;
              echo "<br><br>";
          }
          else{
              $err3="Email Pattern is Wrong";
        }
      }

      if(empty($_POST['phoneno'])) 
      {
          $err4="Phone no is Required";
      }
      else{
          $phoneno=$_POST['phoneno'];
          if(preg_match("/^[0-9]{10}$/",$phoneno)){    //"/^\d{3}-\d{3}-\d{4}$/"
              echo $phoneno;
              echo "<br><br>";
          }
          else{
              $err4="Phone no. is Wrong";
          }
      }
  

$name=$_POST['name'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm-password'];

$sql="INSERT INTO register (`register_name`, `register_phone`, `register_email`, `register_password`, `register_confirm_password`) VALUES ('$name','$phoneno','$email','$password','$confirm_password')";


if(mysqli_query($conn,$sql))
{
    echo "<br>You are registered sucssessfully<br>";
}
}

//}

?>