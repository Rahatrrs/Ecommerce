<?php include './include/header.php' ?>

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Shop - Grid Left Sidebar</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Shop Grid Left Sidebar</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">CATEGORIES</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li>
                                        <ul class="sidebar-menu-collapse">
                                            <!-- Start Single Menu Collapse List -->
                                            <li class="sidebar-menu-collapse-list">
                                                <div class="accordion">
                                                    <a href="#" class="accordion-title collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#men-fashion"
                                                        aria-expanded="false">Men <i
                                                            class="ion-ios-arrow-right"></i></a>
                                                    <div id="men-fashion" class="collapse">
                                                        <ul class="accordion-category-list">
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                                            <li><a href="#">Sweaters</a></li>
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Blouses &amp; Shirts</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> <!-- End Single Menu Collapse List -->
                                        </ul>
                                    </li>
                                    <li><a href="#">Football</a></li>
                                    <li><a href="#"> Men's</a></li>
                                    <li><a href="#"> Portable Audio</a></li>
                                    <li><a href="#"> Smart Watches</a></li>
                                    <li><a href="#">Tennis</a></li>
                                    <li><a href="#"> Uncategorized</a></li>
                                    <li><a href="#"> Video Games</a></li>
                                    <li><a href="#">Women's</a></li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">FILTER BY PRICE</h6>
                            <div class="sidebar-content">
                                <div id="slider-range"></div>
                                <div class="filter-type-price">
                                    <label for="amount">Price range:</label>
                                    <input type="text" id="amount">
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">MANUFACTURER</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>
                                        <li>
                                            <label class="checkbox-default" for="brakeParts">
                                                <input type="checkbox" id="brakeParts">
                                                <span>Brake Parts(6)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="accessories">
                                                <input type="checkbox" id="accessories">
                                                <span>Accessories (10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="EngineParts">
                                                <input type="checkbox" id="EngineParts">
                                                <span>Engine Parts (4)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="hermes">
                                                <input type="checkbox" id="hermes">
                                                <span>hermes (10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="checkbox" id="tommyHilfiger">
                                                <span>Tommy Hilfiger(7)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">SELECT BY COLOR</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>
                                        <li>
                                            <label class="checkbox-default" for="black">
                                                <input type="checkbox" id="black">
                                                <span>Black (6)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="blue">
                                                <input type="checkbox" id="blue">
                                                <span>Blue (8)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="brown">
                                                <input type="checkbox" id="brown">
                                                <span>Brown (10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="Green">
                                                <input type="checkbox" id="Green">
                                                <span>Green (6)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="pink">
                                                <input type="checkbox" id="pink">
                                                <span>Pink (4)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Tag products</h6>
                            <div class="sidebar-content">
                                <div class="tag-link">
                                    <a href="#">asian</a>
                                    <a href="#">brown</a>
                                    <a href="#">euro</a>
                                    <a href="#">fashion</a>
                                    <a href="#">hat</a>
                                    <a href="#">t-shirt</a>
                                    <a href="#">teen</a>
                                    <a href="#">travel</a>
                                    <a href="#">white</a>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <div class="sidebar-content">
                                <a href="product-details-default.html" class="sidebar-banner img-hover-zoom">
                                    <img class="img-fluid" src="assets/images/banner/side-banner.jpg" alt="">
                                </a>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                    </div> <!-- End Sidebar Area -->
                </div>
                <div class="col-lg-9">
                    <!-- Start Shop Product Sorting Section -->
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                    href="#layout-3-grid"><img src="assets/images/icons/bkg_grid.png"
                                                        alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="assets/images/icons/bkg_list.png" alt=""></a></li>
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ml-2">
                                            <span>Showing 1–9 of 21 results</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option -->
                                    <div class="sort-select-list d-flex align-items-center">
                                        <label class="mr-2">Sort By:</label>
                                        <form action="#">
                                            <fieldset>
                                                <select name="speed" id="speed">
                                                    <option>Sort by average rating</option>
                                                    <option>Sort by popularity</option>
                                                    <option selected="selected">Sort by newness</option>
                                                    <option>Sort by price: low to high</option>
                                                    <option>Sort by price: high to low</option>
                                                    <option>Product Name: Z</option>
                                                </select>
                                            </fieldset>
                                        </form>
                                    </div> <!-- End Sort Select Option -->



                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->



                    

                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content tab-animate-zoom">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                            <div class="row">
                                            <?php
// Assuming you have a database connection established

// Set the initial SQL query to fetch all products
$sql = "SELECT * FROM `men's_fashion`";

// Check if the code parameter is set in the URL
if (isset($_GET['code'])) {
    $code = $_GET['code'];

    // Filter products based on the code in the SQL query
    if ($code === 'Men') {
        $sql .= " WHERE code = 'Men'";
    } else if ($code === 'Women') {
        $sql .= " WHERE code = 'Women'";
    } else if ($code === 'Mobile') {
        $sql .= " WHERE code = 'Mobile'";
    } else if ($code === 'Health') {
        $sql .= " WHERE code = 'Health'";
    }
}

// Check if the category parameter is set in the URL
if (isset($_GET['category'])) {
    $category = $_GET['category'];

    // Filter products based on the category in the SQL query
    if (strpos($sql, 'WHERE') !== false) {
        $sql .= " AND category = '$category'";
    } else {
        $sql .= " WHERE category = '$category'";
    }
}

// Execute the query and fetch the products
$result = $conn->query($sql);
?>

<?php 
if ($result->num_rows > 0) {
    // Display the products
    while ($row = $result->fetch_assoc()) {
        ?>


                                                <div class="col-xl-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="product-details-dynamic.php?id=<?php echo $row['id'];?>" class="image-link">
                                                                <img style="height:250px" src="admin/<?php echo $row['image1'] ?>"
                                                                    alt="">
                                                                <img style="height:250px" src="admin/<?php echo $row['image2'] ?>"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                <a href="#" class="addToCartLink" data-product-id="<?php echo $row['id'] ?>">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-dynamic.php?id=<?php echo $row['id'];?>"><?php echo $row['name'] ?></a></h6>
                                                                <ul class="review-star">
                                                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                                    <?php if ($i <= $row['rating']) { ?>
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                    <?php } else { ?>
                                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">৳<?php echo $row['price'] ?></span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>

                                                <?php
                                                }
                                                } else {
                                                    echo 'No products found.';
                                                }
                                                ?>
                                                



                                                
                                                
                                            </div>
                                        </div> <!-- End Grid View Product -->
                                        <!-- Start List View Product -->
                                        <div class="tab-pane sort-layout-single" id="layout-list">
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-1.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-2.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">KAOREET LOBORTIS
                                                                    SAGIT</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price"><del>$30.12</del>
                                                                $25.12</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-3.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-4.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">CONDIMENTUM
                                                                    POSUERE</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price">$95.00</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-5.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-6.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">ALIQUAM
                                                                    LOBORTIS</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price"> $25.12</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-7.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-8.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">CONVALLIS QUAM
                                                                    SIT</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price">$75.00 - $85.00</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-9.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-10.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">DONEC EU LIBERO
                                                                    AC</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price"><del>$25.12</del>
                                                                $20.00</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                            </div>
                                        </div> <!-- End List View Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->

                    <!-- Start Pagination -->
                     <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Shop Section:::... -->

    <!-- Start Footer Section -->
    <footer class="footer-section footer-bg section-top-gap-100">
        <div class="footer-wrapper">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                                data-aos-delay="0">
                                <h5 class="title">INFORMATION</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                                data-aos-delay="200">
                                <h5 class="title">MY ACCOUNT</h5>
                                <ul class="footer-nav">
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                                data-aos-delay="400">
                                <h5 class="title">CATEGORIES</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">Decorative</a></li>
                                    <li><a href="#">Kitchen utensils</a></li>
                                    <li><a href="#">Chair & Bar stools</a></li>
                                    <li><a href="#">Sofas and Armchairs</a></li>
                                    <li><a href="#">Interior lighting</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                                data-aos-delay="600">
                                <h5 class="title">ABOUT US</h5>
                                <div class="footer-about">
                                    <p>We are a team of designers and developers that create high quality Magento,
                                        Prestashop, Opencart.</p>

                                    <address class="address">
                                        <span>Address: Your address goes here.</span>
                                        <span>Email: demo@example.com</span>
                                    </address>
                                </div>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Top -->

            <!-- Start Footer Center -->
            <div class="footer-center">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                            <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                                <h4 class="title">FOLLOW US</h4>
                                <ul class="footer-social-link">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 mb-6">
                            <div class="footer-newsletter" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="title">DON'T MISS OUT ON THE LATEST</h4>
                                <div class="form-newsletter">
                                    <form action="#" method="post">
                                        <div class="form-fild-newsletter-single-item input-color--golden">
                                            <input type="email" placeholder="Your email address..." required>
                                            <button type="submit">SUBSCRIBE!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Center -->

            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div
                        class="row justify-content-between align-items-center align-items-center flex-column flex-md-row mb-n6">
                        <div class="col-auto mb-6">
                            <div class="footer-copyright">
                                <p class="copyright-text">&copy; 2021 <a href="index.html">therankme</a>. Made with <i
                                        class="fa fa-heart text-danger"></i> by <a href="https://therankme.com/"
                                        target="_blank">therankme</a> </p>

                            </div>
                        </div>
                        <div class="col-auto mb-6">
                            <div class="footer-payment">
                                <div class="image">
                                    <img src="assets/images/company-logo/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid"
                                                src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart
                                            successfully!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your
                                            Cart.</strong></li>
                                    <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE
                                            SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area mb-7">
                                    <!-- Start Large Image -->
                                    <div class="product-large-image modal-product-image-large swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Large Image -->
                                    <!-- Start Thumbnail Image -->
                                    <div
                                        class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                    </div>
                                    <!-- End Thumbnail Image -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red"
                                                        class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-green" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-blue" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="variable-single-item ">
                                                <span>Quantity</span>
                                                <div class="product-variable-quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </div>

                                            <div class="product-add-to-cart-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <div class="modal-product-about-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae</p>
                                    </div>
                                    <!-- Start  Product Details Social Area-->
                                    <div class="modal-product-details-social">
                                        <span class="title">SHARE THIS PRODUCT</span>
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>  -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramFeed.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  // Attach a click event listener to the "Add to Cart" links
  $('.addToCartLink').click(function(e) {
    e.preventDefault(); // Prevent the default link behavior

    var productId = $(this).data('product-id');

    $.ajax({
      url: './add_to_cart.php?cart=' + productId, // URL to the add_to_cart.php file with the cart parameter
      type: 'GET',
      dataType: 'json',
      success: function(response) {
        console.log(response); // Debugging information

        if (response.success) {
          alert(response.message);
          $('#cartContainer').load('./include/header.php #cartContainer');
            $('#cart-count').load('./include/header.php #cart-count');
            $('#total-price').load('./include/header.php #total-price');

        } else {
          alert('Error adding product to cart: ' + response.message);
        }
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText); // Debugging information
        console.log(status); // Debugging information
        console.log(error); // Debugging information

        alert('Error adding product to cart. Please try again.');
      }
    });
  });
});
</script>
</body>



</html>