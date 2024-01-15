<?php include './include/header.php' ?>
<?php include './include/connection.php' ?>

<link rel="stylesheet" href="details.css">

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
    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title"> <?php echo $product['name']; ?></h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page"> <?php echo $product['name']; ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start Product Details Section -->
    <div class="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <!-- Start Large Image -->
                        <div class="product-large-image product-large-image-horaizontal swiper-container">
                            <div class="swiper-wrapper">
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="admin/<?php echo $product['image1']; ?>" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="admin/<?php echo $product['image2']; ?>" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="admin/<?php echo $product['image3']; ?>" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="admin/<?php echo $product['image4']; ?>" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="admin/<?php echo $product['image5']; ?>" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="admin/<?php echo $product['image6']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- End Large Image -->
                        <!-- Start Thumbnail Image -->
                        <div
                            class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                            <div class="swiper-wrapper">
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="admin/<?php echo $product['image1']; ?>"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="admin/<?php echo $product['image2']; ?>"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="admin/<?php echo $product['image3']; ?>"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="admin/<?php echo $product['image4']; ?>"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="admin/<?php echo $product['image5']; ?>"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="admin/<?php echo $product['image6']; ?>"
                                        alt="">
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="gallery-thumb-arrow swiper-button-next"></div>
                            <div class="gallery-thumb-arrow swiper-button-prev"></div>
                        </div>
                        <!-- End Thumbnail Image -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title"><?php echo $product['name']; ?></h4>
                            <div class="d-flex align-items-center">
                            <ul class="review-star">
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <?php if ($i <= $product['rating']) { ?>
                                        <li class="fill"><i class="ion-android-star"></i></li>
                                    <?php } else { ?>
                                        <li class="empty"><i class="ion-android-star"></i></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>

                                <a href="#" class="customer-review ml-2">(customer review )</a>
                            </div>
                            <div class="price"> ৳ <?php echo $product['price']; ?></div>
                            <p><?php echo $product['description']; ?></p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            <h4 class="title">Available Options</h4>
                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                                <div class="product-stock"> <span class="product-stock-in"><i
                                            class="ion-checkmark-circled"></i></span><?php echo $product['stock']; ?> IN STOCK</div>
                            </div>
                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center ">
                                <div class="variable-single-item ">
                                    <span>Quantity</span>
                                    <div class="product-variable-quantity">
                                        <input min="1" max="100" value="1" type="number">
                                    </div>
                                </div>
                                
                                    <div class="pdp-mod-product-info-section sku-prop-selection" >
                                        <h6 class="section-title">Size</h6>
                                        <div class="section-content">
                                            <div class="sku-prop-content-header">
                                                
                                            </div>
                                            <div class="sku-prop-content">
                                                
                                            </div>
                                            <div class="sku-prop-content">
                                                <?php if ($product['category'] === 'Shoes') { ?>
                                                    <span class="sku-variable-size" title="6">6</span>
                                                    
                                                    <span class="sku-variable-size" title="8">8</span>
                                                    
                                                    <span class="sku-variable-size" title="10">10</span>
                                                    
                                                    <span class="sku-variable-size" title="12">12</span>
                                                <?php } elseif ($product['category'] === 'Jeans') { ?>
                                                    <span class="sku-variable-size" title="27">27</span>
                                                    <span class="sku-variable-size" title="28">28</span>
                                                    
                                                    <span class="sku-variable-size" title="30">30</span>
                                                    
                                                    <span class="sku-variable-size" title="32">32</span>
                                                    
                                                    <span class="sku-variable-size" title="34">34</span>
                                                    
                                                    <span class="sku-variable-size" title="36">36</span>
                                                    <span class="sku-variable-size" title="36">38</span>
                                                <?php } elseif ($product['category'] === 'Watches') { ?>
                                                    <span></span>
                                                <?php } else{ ?>
                                                    <span class="sku-variable-size" title="M">M</span>
                                                    <span class="sku-variable-size" title="L">L</span>
                                                    <span class="sku-variable-size" title="XL">XL</span>
                                                    <span class="sku-variable-size" title="XXL">XXL</span>
                                                    <span class="sku-variable-size" title="3XL">3XL</span>
                                                    <?php } ?>

                                            </div>



                                        </div>
                                    </div>
                                

                                <div class="product-add-to-cart-btn">
                                   

                                        <a href="#" class="addToCartLink btn btn-block btn-lg btn-black-default-hover" data-product-id="<?php echo $productId; ?>">+ Add To Cart</a>
                                </div>
                            </div>
                            <!-- Start  Product Details Meta Area-->
                            <div class="product-details-meta mb-20">
                                <a href="wishlist.html" class="icon-space-right"><i class="icon-heart"></i>Add to
                                    wishlist</a>
                                <a href="compare.html" class="icon-space-right"><i class="icon-refresh"></i>Compare</a>
                            </div> <!-- End  Product Details Meta Area-->
                        </div> <!-- End Product Variable Area -->

                        <!-- Start  Product Details Catagories Area-->
                        <div class="product-details-catagory mb-2">
                            <span class="title">CATEGORIES:</span>
                            <ul>
                                <li><a href="#"><?php echo $product['category']; ?></a></li>
                                
                            </ul>
                        </div> <!-- End  Product Details Catagories Area-->
                        <!-- Start  Product Details Social Area-->
                        <div class="product-details-social">
                            <span class="title">SHARE THIS PRODUCT:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- End  Product Details Social Area-->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

    <!-- Start Product Content Tab Section -->
    <div class="product-details-content-tab-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Product Details Tab Button -->
                        <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                    Description
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                    Specification
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                    Reviews (1)
                                </a></li>
                        </ul> <!-- End Product Details Tab Button -->

                        <!-- Start Product Details Tab Content -->
                        <div class="product-details-content-tab">
                            <div class="tab-content">
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane active show" id="description">
                                    <div class="single-tab-content-item">
                                        <p><?php echo $product['description']; ?></p>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="specification">
                                    <div class="single-tab-content-item">
                                        <table class="table table-bordered mb-20">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Color</th>
                                                    <td><?php echo $product['color']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Styles</th>
                                                    <td><?php echo $product['style']; ?></td>
                                                <tr>
                                                    <th scope="row">Properties</th>
                                                    <td><?php echo $product['property']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>Fashion has been creating well-designed collections since 2010. The brand
                                            offers feminine designs delivering stylish separates and statement dresses
                                            which have since evolved into a full ready-to-wear collection in which every
                                            item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                            looks with youthful elegance and unmistakable signature style. All the
                                            beautiful pieces are made in Italy and manufactured with the greatest
                                            attention. Now Fashion extends to a range of accessories including shoes,
                                            hats, belts and more!</p>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="review">
                                    <div class="single-tab-content-item">
                                        <!-- Start - Review Comment -->
                                        <ul class="comment">
                                            <!-- Start - Review Comment list-->
                                            <li class="comment-list">
                                                <div class="comment-wrapper">
                                                    <div class="comment-img">
                                                        <img src="assets/images/user/image-1.png" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-content-top">
                                                            <div class="comment-content-left">
                                                                <h6 class="comment-name">Kaedyn Fraser</h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-content-right">
                                                                <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>

                                                        <div class="para-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Tempora inventore dolorem a unde modi iste odio amet,
                                                                fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                provident modi alias culpa, inventore deserunt
                                                                accusantium amet earum soluta consequatur quasi eum eius
                                                                laboriosam, maiores praesentium explicabo enim dolores
                                                                quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                officia, saepe repellat. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start - Review Comment Reply-->
                                                <ul class="comment-reply">
                                                    <li class="comment-reply-list">
                                                        <div class="comment-wrapper">
                                                            <div class="comment-img">
                                                                <img src="assets/images/user/image-2.png" alt="">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-content-top">
                                                                    <div class="comment-content-left">
                                                                        <h6 class="comment-name">Oaklee Odom</h6>
                                                                    </div>
                                                                    <div class="comment-content-right">
                                                                        <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                    </div>
                                                                </div>

                                                                <div class="para-content">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipisicing elit. Tempora inventore dolorem a
                                                                        unde modi iste odio amet, fugit fuga aliquam,
                                                                        voluptatem maiores animi dolor nulla magnam ea!
                                                                        Dignissimos aspernatur cumque nam quod sint
                                                                        provident modi alias culpa, inventore deserunt
                                                                        accusantium amet earum soluta consequatur quasi
                                                                        eum eius laboriosam, maiores praesentium
                                                                        explicabo enim dolores quaerat! Voluptas ad
                                                                        ullam quia odio sint sunt. Ipsam officia, saepe
                                                                        repellat. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> <!-- End - Review Comment Reply-->
                                            </li> <!-- End - Review Comment list-->
                                            <!-- Start - Review Comment list-->
                                            <li class="comment-list">
                                                <div class="comment-wrapper">
                                                    <div class="comment-img">
                                                        <img src="assets/images/user/image-3.png" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-content-top">
                                                            <div class="comment-content-left">
                                                                <h6 class="comment-name">Jaydin Jones</h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-content-right">
                                                                <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>

                                                        <div class="para-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Tempora inventore dolorem a unde modi iste odio amet,
                                                                fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                provident modi alias culpa, inventore deserunt
                                                                accusantium amet earum soluta consequatur quasi eum eius
                                                                laboriosam, maiores praesentium explicabo enim dolores
                                                                quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                officia, saepe repellat. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> <!-- End - Review Comment list-->
                                        </ul> <!-- End - Review Comment -->
                                        <div class="review-form">
                                            <div class="review-form-text-top">
                                                <h5>ADD A REVIEW</h5>
                                                <p>Your email address will not be published. Required fields are marked
                                                    *</p>
                                            </div>

                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="default-form-box">
                                                            <label for="comment-name">Your name <span>*</span></label>
                                                            <input id="comment-name" type="text"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="default-form-box">
                                                            <label for="comment-email">Your Email <span>*</span></label>
                                                            <input id="comment-email" type="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label for="comment-review-text">Your review
                                                                <span>*</span></label>
                                                            <textarea id="comment-review-text"
                                                                placeholder="Write a review" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-md btn-black-default-hover"
                                                            type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                            </div>
                        </div> <!-- End Product Details Tab Content -->

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Content Tab Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">RELATED PRODUCTS</h3>
                                <p>Browse the collection of our related products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-9.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-10.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Epicuri per
                                                        lobortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$68</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-11.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Kaoreet
                                                        lobortis sagit</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$95.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-7.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Condimentum
                                                        posuere</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$115.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-9.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Convallis quam
                                                        sit</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$75.00 - $85.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Aliquam
                                                        lobortis</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$75.00 - $85.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Condimentum
                                                        posuere</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price"><del>$89.00</del> $80.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Cras neque
                                                        metus</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price"><del>$70.00</del> $60.00</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="assets/images/product/default/home-1/default-7.jpg" alt="">
                                                <img src="assets/images/product/default/home-1/default-8.jpg" alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">Donec eu libero
                                                        ac</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">$74</span>
                                            </div>

                                        </div>
                                    </div> <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->


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
<script>
    // Get all the selectable size elements
var sizeElements = document.querySelectorAll('.sku-variable-size');

// Add click event listener to each size element
sizeElements.forEach(function(element) {
    element.addEventListener('click', function() {
        // Remove 'selected' class from all size elements
        sizeElements.forEach(function(el) {
            el.classList.remove('selected');
        });

        // Add 'selected' class to the clicked size element
        this.classList.add('selected');
    });
});

</script>



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
            $('#cart-count').load('./include/header.php #cart-count');
          $('#cartContainer').load('./include/header.php #cartContainer');
        $('#total-price').load('./include/header.php #total-price');
        history.replaceState(null, null, window.location.pathname);

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

<?php include './include/footer.php' ?>
 