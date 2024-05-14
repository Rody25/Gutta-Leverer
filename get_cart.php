<?php
include('db_connect.php');

$customerID = intval($_GET['customerID']);

try {
    $stmt = $conn->prepare("SELECT ProductID, Quantity FROM CartItems WHERE CustomerID = :customerID");
    $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
    $stmt->execute();
    $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['cartItems' => $cartItems]);
} catch (PDOException $e) {
    echo json_encode(['message' => 'An error occurred: ' . $e->getMessage()]);
}
?>
