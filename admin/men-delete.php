<?php
include './include/connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the product ID from the form
    $productId = $_POST['id'];

    // Prepare and execute the SQL query to delete the product
    $deleteSql = "DELETE FROM `men's_fashion` WHERE id = '$productId'";

    if ($conn->query($deleteSql) === TRUE) {
        echo "<script>window.location.href = 'index.php';</script>";
        
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
