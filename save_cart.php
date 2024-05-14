<?php
include('db_connect.php');

function saveCart($customerID, $cartItems) {
    global $conn;

    try {
        // Begin transaction
        $conn->beginTransaction();

        // First, clear existing cart items for the customer
        $sql = "DELETE FROM CartItems WHERE CustomerID = :customerID";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            throw new Exception("Failed to prepare DELETE statement: " . print_r($conn->errorInfo(), true));
        }
        $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
        if (!$stmt->execute()) {
            throw new Exception("Failed to execute DELETE statement: " . print_r($stmt->errorInfo(), true));
        }

        // Insert new cart items
        $sql = "INSERT INTO CartItems (CustomerID, ProductID, Quantity) VALUES (:customerID, :productID, :quantity)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            throw new Exception("Failed to prepare INSERT statement: " . print_r($conn->errorInfo(), true));
        }

        foreach ($cartItems as $item) {
            $productID = $item['ProductID'];
            $quantity = $item['Quantity'];
            $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
            $stmt->bindParam(':productID', $productID, PDO::PARAM_STR);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            if (!$stmt->execute()) {
                throw new Exception("Failed to execute INSERT statement: " . print_r($stmt->errorInfo(), true));
            }
        }

        // Commit transaction
        $conn->commit();
        echo "Cart saved successfully.";
    } catch (Exception $e) {
        // Rollback transaction if there was an error
        $conn->rollBack();
        die("Error: " . $e->getMessage());
    }
}

// Get the JSON input
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if ($data) {
    $customerID = intval($data['customerID']);
    $cartItems = $data['cartItems'];

    // Call the saveCart function to save the cart items
    saveCart($customerID, $cartItems);
} else {
    echo "No data submitted.";
}
?>
