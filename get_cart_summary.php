<?php
include('db_connect.php');

if (!isset($_GET['customerID'])) {
    echo json_encode(['message' => 'Customer ID is required']);
    exit;
}

$customerID = intval($_GET['customerID']);

try {
    // Define store IDs
    $storeIDs = ['K', 'M', 'R'];

    // Prepare data structure
    $data = [];

    foreach ($storeIDs as $storeID) {
        // Get cart items for the store
        $stmt = $conn->prepare("SELECT Products.ProductID, Products.Name AS title, Products.Description, Products.Price, Products.Image, CartItems.Quantity 
                                FROM CartItems 
                                JOIN Products ON CartItems.ProductID = Products.ProductID 
                                WHERE CartItems.CustomerID = :customerID AND Products.StoreID = :storeID");
        $stmt->bindParam(':customerID', $customerID, PDO::PARAM_INT);
        $stmt->bindParam(':storeID', $storeID, PDO::PARAM_STR);
        $stmt->execute();
        $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Add store data to response
        $data[] = ['storeID' => $storeID, 'cartItems' => $cartItems];
    }

    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(['message' => 'An error occurred: ' . $e->getMessage()]);
}
?>
