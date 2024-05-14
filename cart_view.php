<?php
session_start();
include('db_connect.php');

if (!isset($_SESSION['user_id'])) {
    // Handle not logged in
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch cart items for the user
$stmt = $conn->prepare("SELECT p.Name, p.Price, ci.Quantity, (p.Price * ci.Quantity) AS Total FROM CartItems ci JOIN Products p ON ci.ProductID = p.ProductID WHERE ci.CustomerID = ?");
$stmt->execute([$user_id]);
$items = $stmt->fetchAll();

echo "<h1>Your Cart</h1>";
if ($items) {
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>{$item['Name']} - {$item['Quantity']} x \${$item['Price']} = \${$item['Total']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Your cart is empty.</p>";
}

// Optionally add a link to clear the cart or checkout
echo '<a href="checkout.php">Checkout</a>';
?>
