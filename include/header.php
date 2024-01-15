<?php include 'connection.php' ?>

<?php
    session_start();
    
    ?>



<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Tsy - Home</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/logo/TSY.jpg" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css"> -->

    <!-- Plugin CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css"> -->

    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="assets/sass/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>
    <!-- Start Header Area -->
    <header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/images/logo/TSY.jpg" style="height: 50px; width: 50px;" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--golden">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="index.php">Home </a>
                                            <!-- Sub Menu -->
                                            
                                        </li>
                                        <li class="has-dropdown has-megaitem">
                                            <a >Shop <i class="fa fa-angle-down"></i></a>
                                            <!-- Mega Menu -->
                                            <div class="mega-menu">
                                                <ul class="mega-menu-inner">
                                                    <!-- Mega Menu Sub Link -->
                                                    <li class="mega-menu-item">
                                                    <a href="shop-grid.php?code=Men" class="mega-menu-item-title">Men's Fashion</a>

                                                        <ul class="mega-menu-sub">
                                                        <li><a href="shop-grid.php?code=Men&category=T-shirt">T-shirt</a></li>
                                                        <li><a href="shop-grid.php?code=Men&category=Shirt">Shirt</a></li>
                                                        <li><a href="shop-grid.php?code=Men&category=Jeans">Jeans</a></li>
                                                        <li><a href="shop-grid.php?code=Men&category=Punjabi">Punjabi</a></li>
                                                        <li><a href="shop-grid.php?code=Men&category=Watches">Watches</a></li>
                                                        <li><a href="shop-grid.php?code=Men&category=Shoes">Shoes</a></li>

                                                        </ul>
                                                    </li>
                                                    <!-- Mega Menu Sub Link -->
                                                    <li class="mega-menu-item">
                                                        <a href="shop-grid.php?code=Women" class="mega-menu-item-title">Women's Fashion</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="shop-grid.php?code=Women&category=T-shirt">T-shirt</a></li>
                                                            <li><a href="shop-grid.php?code=Women&category=Saree">Saree</a></li>
                                                            <li><a href="shop-grid.php?code=Women&category=Jeans">Jeans</a></li>
                                                            <li><a href="shop-grid.php?code=Women&category=Salwa">Salwar</a></li>
                                                            <li><a href="shop-grid.php?code=Women&category=Watches">Watches</a></li>
                                                            <li><a href="shop-grid.php?code=Women&category=Shoes">Shoes</a></li>
                                                            <li><a href="shop-grid.php?code=Women&category=Ornaments">Ornaments</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- Mega Menu Sub Link -->
                                                    <li class="mega-menu-item">
                                                        <a href="shop-grid.php?code=Mobile" class="mega-menu-item-title">Mobile Accessories</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="shop-grid.php?code=Mobile&category=Adapter">Adapter</a></li>
                                                            <li><a href="shop-grid.php?code=Mobile&category=Cable">Cable</a></li>
                                                            <li><a href="shop-grid.php?code=Mobile&category=Screen Protector">Screen Protector</a></li>
                                                            <li><a href="shop-grid.php?code=Mobile&category=Back Cover">Back Cover</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- Mega Menu Sub Link -->
                                                    <li class="mega-menu-item">
                                                        <a href="shop-grid.php?code=Health" class="mega-menu-item-title">Health & Beauty</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="shop-grid.php?code=Health&category=Mens Care">Men's Care</a></li>
                                                            <li><a href="shop-grid.php?code=Health&category=Skin Care">Skin Care</a></li>
                                                            <li><a href="shop-grid.php?code=Health&category=Body Care">Body Care</a></li>
                                                            <li><a href="shop-grid.php?code=Health&category=Fragrances">Fragrances</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="menu-banner">
                                                    <a href="shop-grid.php" class="menu-banner-link">
                                                        <img class="menu-banner-img"
                                                            src="assets/images/banner/menu-banner.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                        <li class="has-dropdown">
                                        <?php
                                        // Check if the user is logged in
                                        if (isset($_SESSION['user'])) {
                                            // User is logged in
                                            // Display logout link
                                            
                                            
                                            $userName = $_SESSION['userName'];
                                            echo '<a >Welcome, ' . $userName . '  <i
                                            class="fa fa-angle-down"></i></a> ';
                                            
                                            
                                           


                                            echo '<ul class="sub-menu">
                                                    <li><a href="logout.php">Logout</a></li>
                                                 </ul>';
                                        } else {
                                            // User is not logged in
                                            // Display login link
                                            echo '<li><a style="color: red;" href="sign-up.php">SIGNUP/LOGIN</a></li>';
                                        }
                                        ?>
                                            <!-- Sub Menu -->
                                            
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->

                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--golden">
                                <li>
                                    <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                        <i class="icon-heart"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="#offcanvas-add-cart" id="cart-count" class="offcanvas-toggle">
                                    <?php
                                        // Assuming you have a database connection established

                                        // Get the sum of product_quantity in the cart
                                        $sql = "SELECT SUM(product_quantity) AS total_quantity FROM cart";
                                        $result = $conn->query($sql);

                                        if ($result) {
                                            $row = $result->fetch_assoc();
                                            $productCount = $row['total_quantity'];

                                            // If the productCount is null (no rows in the cart table), set it to 0
                                            if ($productCount === null) {
                                                $productCount = 0;
                                            }
                                        } else {
                                            $productCount = 0;
                                        }

                                        // Display the product count
                                        echo '<i class="icon-bag"></i>';
                                        echo '<span class="item-count">' . $productCount . '</span>';
                                    ?>


                                    </a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Start Header Area -->

    <!-- Start Mobile Header -->
    <div class="mobile-header mobile-header-bg-color--golden section-fluid d-lg-block d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Start Mobile Left Side -->
                    <div class="mobile-header-left">
                        <ul class="mobile-menu-logo">
                            <li>
                                <a href="index.php">
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/images/logo/TSY.jpg" style="height: 50px; width: 50px;" alt=""></a>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Left Side -->

                    <!-- Start Mobile Right Side -->
                    <div class="mobile-right-side">
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Right Side -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Header -->

    <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="#"><span>Home</span></a>
                            
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Men's Fashion</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="shop-grid-sidebar-left.html">T-shirt</a></li>
                                        <li><a href="shop-grid-sidebar-right.html">Shirt</a></li>
                                        <li><a href="shop-full-width.html">Jeans</a></li>
                                        <li><a href="shop-list-sidebar-left.html">Punjabi</a></li>
                                        <li><a href="shop-list-sidebar-right.html">Watches</a></li>
                                        <li><a href="shop-list-sidebar-right.html">Shoes</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Women's Fashion</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="shop-grid-sidebar-left.html">T-shirt</a></li>
                                        <li><a href="shop-grid-sidebar-right.html">Saree</a></li>
                                        <li><a href="shop-full-width.html">Jeans</a></li>
                                        <li><a href="shop-list-sidebar-left.html">Salwar</a></li>
                                        <li><a href="shop-list-sidebar-right.html">Watches</a></li>
                                        <li><a href="shop-list-sidebar-right.html">Shoes</a></li>
                                        <li><a href="shop-list-sidebar-right.html">Ornaments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Mobile Accessories</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-details-default.html">Adapter</a></li>
                                        <li><a href="product-details-variable.html">Cable</a></li>
                                        <li><a href="product-details-affiliate.html">Screen Protector</a></li>
                                        <li><a href="product-details-group.html">Back Cover</a></li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Health & Beauty</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-details-default.html">Men's Care</a></li>
                                        <li><a href="product-details-variable.html">Skin Care</a></li>
                                        <li><a href="product-details-affiliate.html">Body Care</a></li>
                                        <li><a href="product-details-group.html">Fragrances</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li>
                            <a href="sign-up.php"><span>SIGNUP/LOGIN</span></a>
                            
                        </li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/logo/TSY.jpg" style="height: 50px; width: 50px;" alt=""></a>
                </div>

                <address class="address">
                    <span>Address: Your address goes here.</span>
                    <span>Call Us: 0123456789, 0123456789</span>
                    <span>Email: demo@example.com</span>
                </address>

                <ul class="social-link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
            <!-- End Mobile contact Info -->

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo/logo_white.png" alt=""></a>
            </div>

            <address class="address">
                <span>Address: Your address goes here.</span>
                <span>Call Us: 0123456789, 0123456789</span>
                <span>Email: demo@example.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="user-link">
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Addcart Section -->
    <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->

        <!-- Start  Offcanvas Addcart Wrapper -->
        <div class="offcanvas-add-cart-wrapper"  id="cartContainer">
            <h4 class="offcanvas-title">Shopping Cart</h4>
            <ul class="offcanvas-cart">
            <div>
                <!-- Cart section code -->
                <?php include 'get_cart_items.php'; ?>
            </div>

                
            
        </div> <!-- End  Offcanvas Addcart Wrapper -->

    </div> <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-lg btn-golden">Search</button>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    