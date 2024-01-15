<?php
// Include the database connection file
include './connection.php';
session_start();
// Check if the request data is present
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the product ID and quantity from the POST data
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];
  
    // Perform any necessary data validation or sanitization here
  
    // Update the product quantity in the database
    $updateQuery = "UPDATE cart SET product_quantity = '$quantity' WHERE product_id = '$productId'";
    $result = mysqli_query($conn, $updateQuery);
  
    if ($result) {
      // Quantity update successful
      $response = array('success' => true, 'message' => 'Quantity updated successfully');
      echo json_encode($response);
    } else {
      // Quantity update failed
      $response = array('success' => false, 'message' => 'Failed to update quantity');
      echo json_encode($response);
    }
  
    // Close the database connection
    mysqli_close($conn);
  } else {
    // Invalid request method
    $response = array('success' => false, 'message' => 'Invalid request method');
    echo json_encode($response);
  }
?>
