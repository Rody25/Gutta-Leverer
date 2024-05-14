<?php
include('db_connect.php');

$data = json_decode(file_get_contents("php://input"), true);
$customerID = $data['customerID'];
$productID = $data['productID'];

try {
    // Check the current quantity
    $stmt = $conn->prepare("SELECT Quantity FROM CartItems WHERE CustomerID = :customerID AND ProductID = :productID");
    $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
    $stmt->bindParam(':productID', $productID, PDO::PARAM_STR);
    $stmt->execute();
    $item = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($item['Quantity'] > 1) {
        // Decrement the quantity
        $update = $conn->prepare("UPDATE CartItems SET Quantity = Quantity - 1 WHERE CustomerID = :customerID AND ProductID = :productID");
        $update->bindParam(':customerID', $customerID, PDO::PARAM_INT);
        $update->bindParam(':productID', $productID, PDO::PARAM_STR);
        $update->execute();
    } else {
        // Remove the item
        $delete = $conn->prepare("DELETE FROM CartItems WHERE CustomerID = :customerID AND ProductID = :productID LIMIT 1");
        $delete->bindParam(':customerID', $customerID, PDO::PARAM_INT);
        $delete->bindParam(':productID', $productID, PDO::PARAM_STR);
        $delete->execute();
    }

    echo json_encode(['message' => 'Item removed from cart successfully']);
} catch (PDOException $e) {
    echo json_encode(['message' => 'An error occurred: ' . $e->getMessage()]);
}
?>
