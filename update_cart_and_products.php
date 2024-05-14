<?php
include('db_connect.php');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if ($data) {
    $customerID = intval($data['customerID']);
    $cartItems = $data['cartItems'];
    $products = $data['products'];

    try {
        $conn->beginTransaction();

        // Update the cart
        $sql = "DELETE FROM CartItems WHERE CustomerID = :customerID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
        $stmt->execute();

        $sql = "INSERT INTO CartItems (CustomerID, ProductID, Quantity) VALUES (:customerID, :productID, :quantity)";
        $stmt = $conn->prepare($sql);

        foreach ($cartItems as $item) {
            $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
            $stmt->bindParam(':productID', $item['ProductID'], PDO::PARAM_STR);
            $stmt->bindParam(':quantity', $item['Quantity'], PDO::PARAM_INT);
            $stmt->execute();
        }

        // Update product quantities
        $sql = "UPDATE Products SET Quantity = :quantity WHERE ProductID = :productID";
        $stmt = $conn->prepare($sql);

        foreach ($products as $product) {
            $stmt->bindParam(':quantity', $product['Quantity'], PDO::PARAM_INT);
            $stmt->bindParam(':productID', $product['ProductID'], PDO::PARAM_STR);
            $stmt->execute();
        }

        $conn->commit();
        echo json_encode(['message' => 'Cart and products updated successfully.']);
    } catch (Exception $e) {
        $conn->rollBack();
        echo json_encode(['message' => 'Failed to update cart and products: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['message' => 'No data submitted.']);
}
?>
