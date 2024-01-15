<?php
// Include the database connection file
include './connection.php';

// Start the session
session_start();

// Check if the request data is present
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the product ID from the request
    $productId = $_POST['productId'];

    // Get the user's IP address
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    // Check if the connection was successful
    if (!$conn) {
        $response = array('success' => false, 'message' => 'Connection failed: ' . mysqli_connect_error());
        echo json_encode($response);
        exit;
    }

    // Remove the product from the session
    unset($_SESSION['cart'][$productId]);

    // Delete the product from the cart table
    $deleteQuery = "DELETE FROM cart WHERE product_id = '$productId' AND ip_address = '$ipAddress'";
    if (!mysqli_query($conn, $deleteQuery)) {
        $response = array('success' => false, 'message' => 'Error deleting item from cart: ' . mysqli_error($conn));
        echo json_encode($response);
        exit;
    }

    // Close the database connection
    mysqli_close($conn);

    // Return a success response
    $response = array('success' => true, 'message' => 'Item deleted from cart successfully!');
    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method.');
    echo json_encode($response);
}
?>
