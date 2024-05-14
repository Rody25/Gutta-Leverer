<?php
include('db_connect.php');

if (isset($_POST['add_to_cart'])) {
    $productID = $_POST['product_id'];
    $quantity = 1;  // Default quantity or get it from POST if variable
    $userID = $_SESSION['user_id'];  // Ensure the user is logged in and get their user ID

    // Check if the product is already in the cart
    $stmt = $conn->prepare("SELECT * FROM CartItems WHERE UserID = ? AND ProductID = ?");
    $stmt->execute([$userID, $productID]);
    if ($stmt->rowCount() > 0) {
        // Update existing item quantity
        $stmt = $conn->prepare("UPDATE CartItems SET Quantity = Quantity + ? WHERE UserID = ? AND ProductID = ?");
        $stmt->execute([$quantity, $userID, $productID]);
    } else {
        // Add new item to cart
        $stmt = $conn->prepare("INSERT INTO CartItems (UserID, ProductID, Quantity) VALUES (?, ?, ?)");
        $stmt->execute([$userID, $productID, $quantity]);
    }
    echo "Product added to cart!";
}
?>