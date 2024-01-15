<?php include './include/connection.php' ?>
<?php
session_start();

// Assuming you have a database connection established

// Query the database to fetch the user's role
$userEmail = $_SESSION['user'];
$query = "SELECT role FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $userEmail);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $userRole);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

// Check if the user's role is 'admin'
if ($userRole === 'admin') {
    // User is logged in as an admin, allow access to the admin page
    // ...
} else {
    // User is logged in but not as an admin, redirect to a restricted access page
    header("Location: ../404.php");
    exit();
}

?>
<!-- POST -->

<!-- POST -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tsy - Shop - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../assets/images/logo/TSY.jpg" rel="icon">

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
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Tsy - Shop</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../assets/images/logo/TSY.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Tsy - Shop</h6>
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
                            <img class="rounded-circle me-lg-2" src="../assets/images/logo/TSY.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Tsy - Shop</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                           
                        


                        <form  method="post">
                            <a type="submit" name="logout"  class="dropdown-item" href="../logout.php">Log Out</a>
                            </form>






                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            
            <div class="container-fluid text-center">
<form action="men-post.php" method="POST" enctype="multipart/form-data" onsubmit="form.reset()">
                <label style="font-weight:900; font-size: 18px;" for="name">Product Name</label>
                <br>
                <input  style="width: 400px " type="text" id="name" name="name" required>
                <br>
                <br>
                <label style="font-weight:900; font-size: 18px;" for="description">Description</label>
                <br>
                <br>
                <textarea style="width: 550px ; height: 50px" id="description" name="description" rows="8" required></textarea>
                <br>
                <br>
                <label style="font-weight:900; font-size: 18px;" for="rating">Product Rating</label>
                <br>
                <input  style="width: 400px " type="number" name="rating" id="rating" min="1" max="5" required>
                <br>
                <br>

                <label style="font-weight:900; font-size: 18px;" for="price">Product Price</label>
                <br>
                <input  style="width: 400px " type="number" name="price" id="price" min="0" step="0.01" required>
                <br>
                <br>

                <label style="font-weight:900; font-size: 18px;" for="stock">Product Stock</label>
                <br>
                <input  style="width: 400px " type="number" name="stock" id="stock" min="1" max="50000" required>
                <br>
                <br>



                <label style="font-weight: 900; font-size: 18px;" for="category">Product Category</label>
                <br>
                <select style="width: 400px" name="category" id="category" onchange="updateSizeOptions()">
                    <option value="T-Shirt"> T-Shirt</option>
                    <option value="Shirt">Shirt</option>
                    <option value="Jeans">Jeans</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Watches">Watches</option>
                    <option value="Shoes">Shoes</option>
                    <option value="Saree">Saree</option>
                    <option value="Salwar">Salwar</option>
                    <option value="Adapter">Adapter</option>
                    <option value="Cable">Cable</option>
                    <option value="Screen Protector">Screen Protector</option>
                    <option value="Back Cover">Back Cover</option>
                    <option value="Mens Care">Men's Care</option>
                    <option value="Skin Care">Skin Care</option>
                    <option value="Body Care">Body Care</option>
                    <option value="Fragrances">Fragrances</option>
                    
                </select>
                <br>
                <br>

                <label style="font-weight: 900; font-size: 18px;" for="size">Product Size</label>
                <br>
                <select style="width: 400px" name="size" id="size">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
                <br>
                <br>

            <script>
                function updateSizeOptions() {
                    var categorySelect = document.getElementById("category");
                    var sizeSelect = document.getElementById("size");

                    var selectedCategory = categorySelect.value;

                    // Clear the existing size options
                    sizeSelect.innerHTML = "";

                    // Add the size options based on the selected category
                    if (selectedCategory === "Jeans") {
                        for (var i = 27; i <= 46; i++) {
                            var option = document.createElement("option");
                            option.value = i;
                            option.textContent = i;
                            sizeSelect.appendChild(option);
                        }
                    } else if (selectedCategory === "Shoes") {
                        for (var j = 6; j <= 12; j++) {
                            var shoeOption = document.createElement("option");
                            shoeOption.value = j;
                            shoeOption.textContent = j;
                            sizeSelect.appendChild(shoeOption);
                        }
                    } else if (selectedCategory === "Watches" || selectedCategory === "Saree" || selectedCategory === "Adapter" || selectedCategory === "Cable" || selectedCategory === "Screen Protector" || selectedCategory === "Back Cover" || selectedCategory === "Mens Care" || selectedCategory === "Skin Care" || selectedCategory === "Body Care" || selectedCategory === "Fragrances"  ) {
                        document.createElement("option").style.display='none';
                    }
                    
                    else {
                        // Add default size options for other categories
                        var defaultSizes = ["S", "M", "L", "XL", "XXL"];
                        for (var k = 0; k < defaultSizes.length; k++) {
                            var defaultOption = document.createElement("option");
                            defaultOption.value = defaultSizes[k];
                            defaultOption.textContent = defaultSizes[k];
                            sizeSelect.appendChild(defaultOption);
                        }
                    }
                }
            </script>


                <br>
                



                <label style="font-weight: 900; font-size: 18px;" for="product-code">Product Code</label>
                <br>
                <select style="width: 400px" name="product-code" id="product-code" required>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Mobile">Mobile</option>
                    <option value="Health">Health</option>
                    
                    
                </select>
                <br>
                <br>



                


                <label style="font-weight:900; font-size: 18px;" for="color">Product Color</label>
                <br>
                <input  style="width: 400px " type="text" id="color" name="color" required>
                <br>
                <br>


                <label style="font-weight:900; font-size: 18px;" for="style">Product Style</label>
                <br>
                <input  style="width: 400px " type="text" id="style" name="style" required>
                <br>
                <br>


                <label style="font-weight:900; font-size: 18px;" for="property">Product Property</label>
                <br>
                <input  style="width: 400px " type="text" id="property" name="property" required>
                <br>
                <br>


                <br>
                <br>
                <h4>Product Images</h4>
                <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image1">Image</label>
                
                <input type="file" id="image" name="image1" required onchange="previewImage(event, 'image1_preview')">
                <img id="image1_preview"  style="height: 200px; width: 300px;">
                <br>
                <br>
                <br>
                <br>
                
                <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image">Image2</label>
                
                <input type="file" id="image2" name="image2" onchange="previewImage(event, 'image2_preview')">
                <img id="image2_preview"  style="height: 200px; width: 300px;">
                <br>
                <br>
                <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image">Image3</label>
                
                <input type="file" id="image3" name="image3" onchange="previewImage(event, 'image3_preview')">
                <img id="image3_preview"  style="height: 200px; width: 300px;">
                
                <br>
                <br>



                <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image">image4</label>
                
                <input type="file" id="image4" name="image4" onchange="previewImage(event, 'image4_preview')">
                <img id="image4_preview"  style="height: 200px; width: 300px;">
                
                <br>
                <br>

                <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image">image5</label>
                
                <input type="file" id="image5" name="image5" onchange="previewImage(event, 'image5_preview')">
                <img id="image5_preview"  style="height: 200px; width: 300px;">
                
                <br>
                <br>


                <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image">image6</label>
                
                <input type="file" id="image6" name="image6" onchange="previewImage(event, 'image6_preview')">
                <img id="image6_preview"  style="height: 200px; width: 300px;">
                
                <br>
                <br>
                

                <input style="width:120px; font-weight:900; font-size: 18px;" class="btn btn-success" type="submit" value="Post">
</form>
            </div>
            <br>
            <br><br>



            <h1 class="text-center" style="border-bottom: 2px solid lightgray">Posted Products</h1>
            <br>



            <div class="content-wrapper pad-none">

<div class="content-inner">					

    <!-- Blog Section -->

    <section id="blog-section" class="blog-section pad-bottom-70">

        <div class="container">

            <!-- Blog Main Wrap -->

            <div class="blog-main-wrap blog-grid">

                <!-- Row -->

                <div class="row">

                    <!-- Col -->

                    <div class="col-lg-12" >

                        <!-- Row -->

                        <div class="row">

                            <!-- Col -->

                            
                            
                            

                            
                            <div class="col-md-4" style="">

                                <div class="blog-style-1" style=" display:flex; overflow: auto; width: 1030px">

                                    <!--Blog Inner-->

                                    <?php
// Retrieve products from the database
                                    $sql = "SELECT * FROM `men's_fashion`";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Fetch each row as an associative array
                                        while ($row = $result->fetch_assoc()) {
                                            // Assign the row data to the $product variable
                                            $product = $row;
                                            ?>
                                            <div class="blog-inner" style="margin-right: 20px; background-color: lightgray; padding: 20px;">
                                                <div class="blog-thumb relative">
                                                    <img style="height: 246px" src="<?php echo $product['image1']; ?>" class="img-fluid" width="768" height="600" alt="blog-img" />
                                                    <div class="top-meta">
                                                        <ul class="top-meta-list">
                                                            <li>
                                                                <div class="post-date">
                                                                    <a href="../product-details-dynamic.php?id=<?php echo $product['id']; ?>">
                                                                        <i class="ti-calendar"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="blog-details">
                                                    <div class="blog-title">
                                                        <h4 class="margin-bottom-10">
                                                            <a href="../product-details-dynamic.php?id=<?php echo $product['id']; ?>" class="blog-name"><?php echo $product['name']; ?></a>
                                                        </h4>
                                                    </div>
                                                    <div class="post-desc mt-2">
                                                        <div class="blog-link" style="display: flex;">
                                                            <div class="row">
                                                            <form method="post" action="men-delete.php">
                                                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                                                <input class="btn btn-danger" type="submit" value="DELETE">
                                                            </form>

                                                            </div>
                                                            <div class="row" style="padding-left: 170px;">
                                                                <form method="post" action="men-update.php">
                                                                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                                                    <a class="btn btn-success" type="submit" href="men-update.php?id=<?php echo $product['id']; ?>">UPDATE</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "No products found.";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>


                                    <!--Blog Inner Ends-->

                                </div>

                            </div>
                            
                        </div>

                        <!-- row -->

                    </div>									

                    <!-- Col -->

                </div>

                <!-- Row -->

            </div>

            <!-- Blog Main Wrap -->

        </div>

        <!-- Container -->

    </section>

    <!-- Blog Section End -->

</div>

</div>










            <!-- Sale & Revenue Start -->
            
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
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
    
</body>


</html>