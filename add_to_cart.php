<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project"; // change as needed

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = floatval($_POST['price']);
    $quantity = intval($_POST['quantity']);
    //$imageData = file_get_contents($_FILES['image']['tmp_name']);

    $stmt = $conn->prepare("INSERT INTO cart (p_name, p_price, p_quantity) VALUES (?, ?, ?)");
    $stmt->bind_param("sdi", $name, $price, $quantity);
   // $stmt->send_long_data(1, $imageData);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
