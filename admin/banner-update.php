<?php
session_start();
$db_host = "localhost";
$db_name = "mrinmoy";
$db_user = "root";
$db_pass = "";



    // connect to database
try {
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
    }
    // getting the database

    $conn = mysqli_connect("localhost", "root", "", "mrinmoy");
    
    if (isset($_POST['submit'])) {
        // Define target directory
        $target_dir = 'uploads/banner/';
    
        // Upload and move images
        
        $image_urls = array();
        for ($i = 1; $i <= 5; $i++) {
            if (!empty($_FILES["image$i"]) && $_FILES["image$i"]["error"] == 0) {
                $image = $_FILES["image$i"];
                $filename = preg_replace('/[^a-zA-Z0-9_.-]/', '', pathinfo($image['name'], PATHINFO_FILENAME));
                $extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
                $new_filename = $filename . '_' . time() . '.' . $extension;
                $target_file = $target_dir . $new_filename;
                if (in_array($extension, array('jpg', 'jpeg', 'png', 'gif')) && move_uploaded_file($image['tmp_name'], $target_file)) {
                    $image_urls[] = $target_file;
                } else {
                    // Error handling: Display an error message or log the error to a file
                    $image_urls[] = '';
                }
            } else {
                $image_urls[] = '';
            }
        }
    
        // Insert images into database
        $image1_url = $image_urls[0];
        $image2_url = $image_urls[1];
        $image3_url = $image_urls[2];
        $image4_url = $image_urls[3];
        $image5_url = $image_urls[4];
        // Update post in database
        $title1 = $_POST['title1'];
        $title2 = $_POST['title2'];
        $title3 = $_POST['title3'];
        $title4 = $_POST['title4'];
        $title5 = $_POST['title5'];
        $sql = "UPDATE banner SET title1='$title1', title2='$title2', title3='$title3', title4='$title4', title5='$title5', image1='$image1_url', image2='$image2_url', image3='$image3_url', image4='$image4_url', image5='$image5_url' WHERE id=4";
    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error updating post: " . $conn->error;
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
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>মৃন্ময়</h3>
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
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="gallery_update.php" class="nav-link " data-bs-toggle=""><i class="fa fa-laptop me-2"></i>Gallery Update</a>
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="banner-update.php" class="nav-link active" data-bs-toggle=""><i class="fa fa-laptop me-2"></i>Banner Update</a>
                        
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
            <form method="POST" enctype="multipart/form-data" onsubmit="form.reset()">
  <br>
  <br>
  <h4>Banner Update</h4>
  <br><br>
  <div>
    <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image1">Image 1</label>
    <input type="file" id="image1" name="image1" required onchange="previewImage(event, 'image1_preview')">
    <img id="image1_preview" style="max-width: 300px; max-height: 200px;">
  </div>
  <br>
  <label style="font-weight:900; font-size: 18px;" for="title1">Title</label>
  <br>
    <input  style="width: 400px " type="text" id="title1" name="title1" required>
  <br><br>
  <br>
  <div>
    <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image2">Image 2</label>
    <input type="file" id="image2" name="image2" required onchange="previewImage(event, 'image2_preview')">
    <img id="image2_preview" style="max-width: 300px; max-height: 200px;">
  </div>
  <br><label style="font-weight:900; font-size: 18px;" for="title2">Title</label>
  <br>
    <input  style="width: 400px " type="text" id="title2" name="title2" required>
  <br><br>
  <br>
  <div>
    <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image3">Image 3</label>
    <input type="file" id="image3" name="image3" required onchange="previewImage(event, 'image3_preview')">
    <img id="image3_preview" style="max-width: 300px; max-height: 200px;">
  </div>
  <br><label style="font-weight:900; font-size: 18px;" for="title3">Title</label>
  <br>
    <input  style="width: 400px " type="text" id="title3" name="title3" required>
  <br><br>
  <br>
  <div>
    <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image4">Image 4</label>
    <input type="file" id="image4" name="image4" required onchange="previewImage(event, 'image4_preview')">
    <img id="image4_preview" style="max-width: 300px; max-height: 200px;">
  </div>
  <br><label style="font-weight:900; font-size: 18px;" for="title4">Title</label>
  <br>
    <input  style="width: 400px " type="text" id="title4" name="title4" required>
  <br><br>
  <br>
  <div>
    <label style="padding-right: 30px; font-weight:900; font-size: 18px;" for="image5">Image 5</label>
    <input type="file" id="image5" name="image5" required onchange="previewImage(event, 'image5_preview')">
    <img id="image5_preview" style="max-width: 300px; max-height: 200px;">
  </div>
  <br><label style="font-weight:900; font-size: 18px;" for="title5">Title</label>
  <br>
    <input  style="width: 400px " type="text" id="title5" name="title5" required>
  <br><br>
  <br>
  <input class="btn btn-success" type="submit" name="submit" value="Upload">
</form>

            </div>
            <br>
            <br><br>



            
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