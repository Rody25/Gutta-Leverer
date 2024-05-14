<?php
include('db_connect.php');

$customerID = intval($_GET['customerID']);

try {
    // Get cart items
    $stmt = $conn->prepare("SELECT ProductID, Quantity FROM CartItems WHERE CustomerID = :customerID");
    $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
    $stmt->execute();
    $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get products
    $stmt = $conn->prepare("SELECT ProductID, Quantity FROM Products");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['cartItems' => $cartItems, 'products' => $products]);
} catch (PDOException $e) {
    echo json_encode(['message' => 'An error occurred: ' . $e->getMessage()]);
}
?>
