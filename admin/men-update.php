
<?php include './include/connection.php' ?>
<?php 
            if (isset($_GET['id'])) {
                // Retrieve the product ID from the URL
                $productId = $_GET['id'];

                // Prepare and execute the SQL query to retrieve the product details
                $sql = "SELECT * FROM `men's_fashion` WHERE id = '$productId'";
                $result = $conn->query($sql);

                // Check if a matching product is found
                if ($result->num_rows > 0) {
                    // Fetch the product details
                    $product = $result->fetch_assoc();

                    // Display the product details
                    ?>


<?php
// Assuming you have a database connection established

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $id = $product['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category = $_POST['category'];
    $productCode = $_POST['product-code'];
    if (isset($_POST['size']) && !empty($_POST['size'])) {
        // The "size" key is defined and not empty
        $size = $_POST['size'];
    } else {
        // The "size" key is either not defined or empty
        $size = ""; // Set a default value or leave it empty, depending on your requirements
    }
    $color = $_POST['color'];
    $style = $_POST['style'];
    $property = $_POST['property'];

    // Handle the file uploads
    $targetDir = 'uploads/'; // Directory to store the uploaded images

    // Update the existing images or upload new ones
    $image1Path = $product['image1'];
    if ($_FILES['image1']['name']) {
        $image1Tmp = $_FILES['image1']['tmp_name'];
        $image1Name = uniqid() . '_' . $_FILES['image1']['name'];
        $image1Path = $targetDir . $image1Name;
        move_uploaded_file($image1Tmp, $image1Path);
    }

    // Repeat the process for image2 to image6
    $image2Path = $product['image2'];
    if ($_FILES['image2']['name']) {
        $image2Tmp = $_FILES['image2']['tmp_name'];
        $image2Name = uniqid() . '_' . $_FILES['image2']['name'];
        $image2Path = $targetDir . $image2Name;
        move_uploaded_file($image2Tmp, $image2Path);
    }

    $image3Path = $product['image3'];
    if ($_FILES['image3']['name']) {
        $image3Tmp = $_FILES['image3']['tmp_name'];
        $image3Name = uniqid() . '_' . $_FILES['image3']['name'];
        $image3Path = $targetDir . $image3Name;
        move_uploaded_file($image3Tmp, $image3Path);
    }

    $image4Path = $product['image4'];
    if ($_FILES['image4']['name']) {
        $image4Tmp = $_FILES['image4']['tmp_name'];
        $image4Name = uniqid() . '_' . $_FILES['image4']['name'];
        $image4Path = $targetDir . $image4Name;
        move_uploaded_file($image4Tmp, $image4Path);
    }

    $image5Path = $product['image5'];
    if ($_FILES['image5']['name']) {
        $image5Tmp = $_FILES['image5']['tmp_name'];
        $image5Name = uniqid() . '_' . $_FILES['image5']['name'];
        $image5Path = $targetDir . $image5Name;
        move_uploaded_file($image5Tmp, $image5Path);
    }

    $image6Path = $product['image6'];
    if ($_FILES['image6']['name']) {
        $image6Tmp = $_FILES['image6']['tmp_name'];
        $image6Name = uniqid() . '_' . $_FILES['image6']['name'];
        $image6Path = $targetDir . $image6Name;
        move_uploaded_file($image6Tmp, $image6Path);
    }

    // Update the product information in the database
    // Write the appropriate SQL query to update the product with the given productId
    $sql = "UPDATE `men's_fashion` SET name=?, description=?, rating=?, price=?, stock=?, category=?, code=?, size=?, color=?, style=?, property=?, image1=?, image2=?, image3=?, image4=?, image5=?, image6=? WHERE id=?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("sssssssssssssssssi", $name, $description, $rating, $price, $stock, $category, $productCode, $size, $color, $style, $property, $image1Path, $image2Path, $image3Path, $image4Path, $image5Path, $image6Path, $id);

    // Execute the statement
    $result = $stmt->execute();

    // Check if the update was successful
    if ($result) {
        echo "Product updated successfully.";
        echo "<script>window.location.href = 'index.php';</script>";

    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>মৃন্ময় - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../mrinmoy/new.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>মৃন্ময়  </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../mrinmoy/new.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">মৃন্ময়</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="gallery_update.php" class="nav-link " data-bs-toggle=""><i class="fa fa-laptop me-2"></i>Gallery Update</a>
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="banner-update.php" class="nav-link " data-bs-toggle=""><i class="fa fa-laptop me-2"></i>Banner Update</a>
                        
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../mrinmoy/new.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">মৃন্ময়</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                           
                        


                        <form  method="post">
                            <a type="submit" name="logout"  class="dropdown-item" href="../login.php?action=logout">Log Out</a>
                            </form>






                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
           
            
            <div class="container-fluid text-center">
            <form  method="POST" enctype="multipart/form-data" onsubmit="form.reset()">
                <label style="font-weight: 900; font-size: 18px;" for="name">Product Name</label>
                <br>
                <input style="width: 400px" type="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" maxlength="255">
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="description">Description</label>
                <br>
                <textarea style="width: 550px; height: 50px;" id="description" name="description"><?php echo htmlspecialchars($product['description']); ?></textarea>
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="rating">Product Rating</label>
                <br>
                <input style="width: 400px" type="number" name="rating" id="rating" min="1" max="5" value="<?php echo $product['rating']; ?>">
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="price">Product Price</label>
                <br>
                <input style="width: 400px" type="number" name="price" id="price" min="0" step="0.01" value="<?php echo $product['price']; ?>">
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="stock">Product Stock</label>
                <br>
                <input style="width: 400px" type="number" name="stock" id="stock" min="1" max="50000" value="<?php echo $product['stock']; ?>">
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="category">Product Category</label>
                <br>
                <select style="width: 400px" name="category" id="category" onchange="updateSizeOptions()">
                    <option value="T-Shirt" <?php if ($product['category'] === 'T-Shirt') echo 'selected'; ?>>T-Shirt</option>
                    <option value="Shirt" <?php if ($product['category'] === 'Shirt') echo 'selected'; ?>>Shirt</option>
                    <option value="Jeans" <?php if ($product['category'] === 'Jeans') echo 'selected'; ?>>Jeans</option>
                    <option value="Punjabi" <?php if ($product['category'] === 'Punjabi') echo 'selected'; ?>>Punjabi</option>
                    <option value="Watches" <?php if ($product['category'] === 'Watches') echo 'selected'; ?>>Watches</option>
                    <option value="Shoes" <?php if ($product['category'] === 'Shoes') echo 'selected'; ?>>Shoes</option>
                    <option value="Saree" <?php if ($product['category'] === 'Saree') echo 'selected'; ?>>Saree</option>
                    <option value="Salwar" <?php if ($product['category'] === 'Salwar') echo 'selected'; ?>>Salwar</option>
                    <option value="Adapter" <?php if ($product['category'] === 'Adapter') echo 'selected'; ?>>Adapter</option>
                    <option value="Cable" <?php if ($product['category'] === 'Cable') echo 'selected'; ?>>Cable</option>
                    <option value="Screen Protector" <?php if ($product['category'] === 'Screen Protector') echo 'selected'; ?>>Screen Protector</option>
                    <option value="Back Cover" <?php if ($product['category'] === 'Back Cover') echo 'selected'; ?>>Back Cover</option>
                    <option value="Mens Care" <?php if ($product['category'] === "Mens Care") echo 'selected'; ?>>Men's Care</option>
                    <option value="Skin Care" <?php if ($product['category'] === 'Skin Care') echo 'selected'; ?>>Skin Care</option>
                    <option value="Body Care" <?php if ($product['category'] === 'Body Care') echo 'selected'; ?>>Body Care</option>
                    <option value="Fragrances" <?php if ($product['category'] === 'Fragrances') echo 'selected'; ?>>Fragrances</option>

                </select>
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="size">Product Size</label>
                <br>
                <select style="width: 400px" name="size" id="size">
                    <?php
                    $selectedCategory = $product['category'];

                    if ($selectedCategory === 'Jeans') {
                        for ($i = 27; $i <= 46; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                    } else if ($selectedCategory === 'Shoes') {
                        for ($j = 6; $j <= 12; $j++) {
                            echo '<option value="' . $j . '">' . $j . '</option>';
                        }
                    } else if ($selectedCategory === "Watches" || $selectedCategory === "Saree" || $selectedCategory === "Adapter" || $selectedCategory === "Cable" || $selectedCategory === "Screen Protector" || $selectedCategory === "Back Cover" || $selectedCategory === "Mens Care" || $selectedCategory === "Skin Care" || $selectedCategory === "Body Care" || $selectedCategory === "Fragrances") {
                        // Add your code here for these categories if needed
                    } else {
                        $defaultSizes = array("S", "M", "L", "XL", "XXL");
                        foreach ($defaultSizes as $size) {
                            echo '<option value="' . $size . '">' . $size . '</option>';
                        }
                    }
                    
                    ?>
                </select>


                <br>
                <br>
                



                <label style="font-weight: 900; font-size: 18px;" for="product-code">Product Code</label>
                <br>
                <select style="width: 400px" name="product-code" id="product-code" >
                    <option value="Men" <?php if ($product['code'] === 'Men') echo 'selected'; ?>>Men</option>
                    <option value="Women" <?php if ($product['code'] === 'Women') echo 'selected'; ?>>Women</option>
                    <option value="Mobile" <?php if ($product['code'] === 'Mobile') echo 'selected'; ?>>Mobile</option>
                    <option value="Health" <?php if ($product['code'] === 'Health') echo 'selected'; ?>>Health</option>
                    
                    
                </select>
                
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="color">Product Color</label>
                <br>
                <input style="width: 400px" type="text" id="color" name="color" value="<?php echo htmlspecialchars($product['color']); ?>">
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="style">Product Style</label>
                <br>
                <input style="width: 400px" type="text" id="style" name="style" value="<?php echo htmlspecialchars($product['style']); ?>">
                <br>
                <br>
                <label style="font-weight: 900; font-size: 18px;" for="property">Product Property</label>
                <br>
                <input style="width: 400px" type="text" id="property" name="property" value="<?php echo htmlspecialchars($product['property']); ?>">
                <br>
                <br>
                <h4>Product Images</h4>
                <label style="padding-right: 30px; font-weight: 900; font-size: 18px;" for="image1">Image</label>
                <input type="file" id="image1" name="image1" required onchange="previewImage(event, 'image1_preview')">
                <img id="image1_preview" style="height: 200px; width: 300px;">
                <br>
                <br>
                <img src="<?php echo $product['image1']; ?>" style="height: 200px; width: 300px;" alt="">
                <br>
                <br>
                <br>
                <label style="padding-right: 30px; font-weight: 900; font-size: 18px;" for="image2">Image2</label>
                <input type="file" id="image2" name="image2" onchange="previewImage(event, 'image2_preview')">
                <img id="image2_preview" style="height: 200px; width: 300px;">
                <br>
                <br>
                <img src="<?php echo $product['image2']; ?>" style="height: 200px; width: 300px;" alt="">
                <br>
                <br>
                <br>
                <label style="padding-right: 30px; font-weight: 900; font-size: 18px;" for="image3">Image3</label>
                <input type="file" id="image3" name="image3" onchange="previewImage(event, 'image3_preview')">
                <img id="image3_preview" style="height: 200px; width: 300px;">
                <br>
                <br>
                <img src="<?php echo $product['image3']; ?>" style="height: 200px; width: 300px;" alt="">
                <br>
                <br>
                <br>
                <label style="padding-right: 30px; font-weight: 900; font-size: 18px;" for="image4">image4</label>
                <input type="file" id="image4" name="image4" onchange="previewImage(event, 'image4_preview')">
                <img id="image4_preview" style="height: 200px; width: 300px;">
                <br>
                <br>
                <img src="<?php echo $product['image4']; ?>" style="height: 200px; width: 300px;" alt="">
                <br>
                <br>
                <br>
                <label style="padding-right: 30px; font-weight: 900; font-size: 18px;" for="image5">image5</label>
                <input type="file" id="image5" name="image5" onchange="previewImage(event, 'image5_preview')">
                <img id="image5_preview" style="height: 200px; width: 300px;">
                <br>
                <br>
                <img src="<?php echo $product['image5']; ?>" style="height: 200px; width: 300px;" alt="">
                <br>
                <br>
                <br>
                <label style="padding-right: 30px; font-weight: 900; font-size: 18px;" for="image6">image6</label>
                <input type="file" id="image6" name="image6" onchange="previewImage(event, 'image6_preview')">
                <img id="image6_preview" style="height: 200px; width: 300px;">
                <br>
                <br>
                <img src="<?php echo $product['image6']; ?>" style="height: 200px; width: 300px;" alt="">
                <br>
                <br>
                <br>
                <input style="width:120px; font-weight:900; font-size: 18px;" class="btn btn-success" type="submit" value="Update">
            </form>




                            <?php
                    } else {
                        // No product found with the provided ID
                        echo "Product not found.";
                    }

                    // Close the database connection
                    $conn->close();
                } else {
                    // ID parameter is missing in the URL
                    echo "Invalid product ID.";
                }
                ?>
            </div>
            <br>
            <br><br>



            
            <br>



            <div class="content-wrapper pad-none">



</div>










            <!-- Sale & Revenue Start -->
            
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            
            <!-- Widgets End -->

            

            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>
 <!-- Template Javascript -->
 <script src="js/main.js"></script>
    <script>
        function previewImage(event, previewId) {
  var reader = new FileReader();
  reader.onload = function(){
    var output = document.getElementById(previewId);
    output.src = reader.result;
    output.style.display = 'block';
  }
  reader.readAsDataURL(event.target.files[0]);
}
    </script>

</html>