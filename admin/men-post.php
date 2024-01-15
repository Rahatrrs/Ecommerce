<?php include './include/connection.php'; ?>





<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    if (isset($_POST['size']) && !empty($_POST['size'])) {
        // The "size" key is defined and not empty
        $size = $_POST['size'];
    } else {
        // The "size" key is either not defined or empty
        $size = ""; // Set a default value or leave it empty, depending on your requirements
    }
    $category = $_POST['category'];
    $productCode = $_POST['product-code'];
    $color = $_POST['color'];
    $style = $_POST['style'];
    $property = $_POST['property'];

    // Prepare and execute the SQL query with prepared statements
    $stmt = $conn->prepare("INSERT INTO `men's_fashion` (name, description, rating, price, stock, size, category, code, color, style, property) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind the parameters to the prepared statement
    $stmt->bind_param("sssssssssss", $name, $description, $rating, $price, $stock, $size, $category, $productCode, $color, $style, $property);

    if ($stmt->execute()) {
        $product_id = $stmt->insert_id; // Get the ID of the newly inserted product

        // Handle image uploads
        $targetDir = "uploads/"; // Directory where the images will be stored

        // Iterate over each uploaded image
        for ($i = 1; $i <= 6; $i++) {
            $fileKey = "image" . $i;

            if (isset($_FILES[$fileKey])) {
                $fileName = $_FILES[$fileKey]['name'];
                $fileTmpName = $_FILES[$fileKey]['tmp_name'];
                $fileType = $_FILES[$fileKey]['type'];

                // Generate a unique filename for the image
                $uniqueFileName = uniqid() . "_" . $fileName;

                $targetFilePath = $targetDir . $uniqueFileName;

                // Move the uploaded image to the target directory
                if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                    // Get the appropriate image column name
                    $imageColumn = "image" . $i;

                    // Update the image column in the men's_fashion table
                    $updateImageSql = "UPDATE `men's_fashion` SET $imageColumn = ? WHERE id = ?";

                    $stmt2 = $conn->prepare($updateImageSql);
                    $stmt2->bind_param("si", $targetFilePath, $product_id);

                    if ($stmt2->execute()) {
                        echo "<script>window.location.href = 'index.php';</script>";
                    } else {
                        echo "Failed to update image $i.";
                    }
                } else {
                    echo "Failed to upload $fileKey.";
                }
            }
        }

        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statements
    $stmt->close();
    $stmt2->close();

    // Close the database connection
    $conn->close();
}
?>
