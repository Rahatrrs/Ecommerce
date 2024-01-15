<?php
include './include/connection.php';

// Start the session
session_start();

// Check if the 'cart' parameter is present in the URL
if (isset($_GET['cart'])) {
    
    $productId = $_GET['cart'];
    // Get the user's IP address
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    // Insert the product id, IP address, and set the quantity to 1
    $quantity = 1;

    // Check if the product quantity is already stored in the session
    if (isset($_SESSION['cart'][$productId])) {
        // Increment the quantity by 1 if it exists in the session
        $quantity = $_SESSION['cart'][$productId] + 1;
    }

    // Store the updated quantity in the session
    $_SESSION['cart'][$productId] = $quantity;

    // Check if the connection was successful
    if (!$conn) {
        $response = array('success' => false, 'message' => 'Connection failed: ' . mysqli_connect_error());
        echo json_encode($response);
        exit;
    }

    // Check if the product already exists in the cart for the current IP address
    $selectQuery = "SELECT * FROM cart WHERE product_id = '$productId' AND ip_address = '$ipAddress'";
    $result = mysqli_query($conn, $selectQuery);
    $existingProduct = mysqli_fetch_assoc($result);

    if ($existingProduct) {
        // Update the existing product quantity in the database
        $updateQuery = "UPDATE cart SET product_quantity = '$quantity' WHERE product_id = '$productId' AND ip_address = '$ipAddress'";
        if (mysqli_query($conn, $updateQuery)) {
            $response = array('success' => true, 'message' => 'Product added successfully!');
            echo json_encode($response);
        } else {
            $response = array('success' => false, 'message' => 'Error updating product quantity in cart: ' . mysqli_error($conn));
            echo json_encode($response);
        }
    } else {
        // Insert the data into the 'cart' table if the product doesn't exist
        $insertQuery = "INSERT INTO cart (product_id, ip_address, product_quantity) VALUES ('$productId', '$ipAddress', '$quantity')";
        if (mysqli_query($conn, $insertQuery)) {
            $response = array('success' => true, 'message' => 'Product added successfully!');
            echo json_encode($response);
        } else {
            $response = array('success' => false, 'message' => 'Error adding product to cart: ' . mysqli_error($conn));
            echo json_encode($response);
        }
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    $response = array('success' => false, 'message' => 'No product ID specified.');
    echo json_encode($response);
}
?>
