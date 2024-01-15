<?php include './include/header.php' ?>
<?php include './include/connection.php' ?>

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Cart</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section" >
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                        <?php
                                            $myipAddress = $_SERVER['REMOTE_ADDR'];
                                            $cartQuery = "SELECT * FROM cart WHERE ip_address = '$myipAddress'";
                                            $cartResult = $conn->query($cartQuery);

                                            $subtotal = 0; // Initialize the subtotal variable

                                            if ($cartResult->num_rows > 0) {
                                                while ($cartData = $cartResult->fetch_assoc()) {
                                                    $productId = $cartData['product_id'];
                                                    $productQuantity = $cartData['product_quantity'];

                                                    // Retrieve the product details from the men's-fashion table
                                                    $productQuery = "SELECT * FROM `men's_fashion` WHERE id = $productId";
                                                    $productResult = $conn->query($productQuery);

                                                    if ($productResult->num_rows > 0) {
                                                        $product = $productResult->fetch_assoc();
                                                        $productName = $product['name'];
                                                        $productImage = $product['image1'];
                                                        $productPrice = $product['price'];
                                                        $subtotal += $productPrice * $productQuantity; // Update the subtotal
                                                        
                                                        // Rest of the code...
                                        ?>
                                    <tbody  id="view-cart" >
                                        <!-- Start Cart Single Item-->
                                        <tr >
                                            <td class="product_remove" >
                                                
                                                <a href="#" class="deleteFromCart" data-product-id="<?php echo $productId;?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="product-details-default.html"><img
                                                        src="./admin/<?php echo $productImage; ?>"
                                                        alt=""></a></td>
                                            <td class="product_name"><a href="product-details-dynamic.php?id=<?php echo $product['id'];?>"><?php echo $productName ?></a></td>
                                            <td class="product-price">৳ <?php echo $productPrice 
                                            ; ?></td>
                                            <td class="product_quantity"><label>Quantity</label>

                                            <input style="border: 1px solid lightgray; width: 48px" type="number" class="quantity-input" data-product-id="<?php echo $productId; ?>" value="<?php echo $productQuantity; ?>" onchange="updateQuantity(this)">

                                        </td >
                                        <td class="product_total" id="product-total">
                                    ৳ <?php echo $productPrice * $productQuantity; ?>
                                        </td>

                                        </tr>
                                        
                                        
                                        <!-- End Cart Single Item-->
                                        <!-- Start Cart Single Item-->
                                         <!-- End Cart Single Item-->
                                    </tbody>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                </table>
                            </div>
                            <div class="cart_submit">
                                
                                <!-- <a href="#" class="btn btn-md btn-golden" id="update">Update Cart</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input class="mb-2" placeholder="Coupon code" type="text">
                                
                                <button type="submit" class="btn btn-md btn-golden">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div  class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p id="sub-total" class="cart_amount">৳ <?php echo $subtotal; ?></p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount">৳ <?php echo $shipping= 100; ?></p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p id="grand-total" class="cart_amount">৳ <?php echo $subtotal+$shipping; ?></p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="checkout.php" class="btn btn-md btn-golden">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> <!-- ...:::: End Cart Section:::... -->

<!-- Include the CDN link for the script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Add your custom script -->
<script>
// Get all the delete links
var deleteLinks = document.getElementsByClassName('deleteFromCart');

// Add event listeners to each delete link
for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default link behavior

    // Get the product ID
    var productId = this.getAttribute('data-product-id');

    // Send an AJAX request to delete the item from the cart
    $.ajax({
      url: './include/delete_from_cart.php',
      method: 'POST',
      data: { productId: productId },
      success: function(response) {
        // Handle the response from the server if needed
        console.log(response);
        // Reload the #cartContainer element
        $('#cartContainer').load('./include/header.php #cartContainer');
        $('#total-price').load('./include/header.php #total-price');
        $('#view-cart').load('./include/header.php #view-cart');
        
      },
      error: function(xhr, status, error) {
        // Handle the error if needed
        console.log(error);
      }
    });
  });
}
</script>





<script>
function updateQuantity(input) {
  var productId = input.getAttribute('data-product-id');
  var quantity = input.value;

  // Send an AJAX request to update the product quantity
  $.ajax({
    url: './include/update_cart.php',
    method: 'POST',
    data: {
      productId: productId,
      quantity: quantity
    },
    success: function(response) {
      // Handle the response from the server if needed
      console.log(response);
      // Update the corresponding elements in the DOM
      $('#cartContainer').load('./include/header.php #cartContainer');
      $('#total-price').load('./include/header.php #total-price');
      $('#cart-count').load('./include/header.php #cart-count');
      $('#product-total').load('./cart.php #product-total');
      $('#sub-total').load('./cart.php #sub-total');
      $('#grand-total').load('./cart.php #grand-total');
      
        


    },
    error: function(xhr, status, error) {
      // Handle the error if needed
      console.log(error);
    }
  });
}

$(document).ready(function() {
  $('#update-cart-btn').click(function(e) {
    e.preventDefault(); // Prevent the default link behavior

    // Get all the quantity input fields
    var quantityInputs = $('.quantity-input');

    // Iterate over each quantity input field
    quantityInputs.each(function() {
      var input = $(this);
      updateQuantity(input[0]); // Call the updateQuantity function for each input
    });
  });
});
</script>












    <?php include './include/footer.php'?>