<?php include 'connection.php' ?>
<?php 
?>
<?php
$myipAddress = $_SERVER['REMOTE_ADDR'];
$cartQuery = "SELECT * FROM cart WHERE ip_address = '$myipAddress'";
$cartResult = $conn->query($cartQuery);

$subtotal = 0; // Initialize the subtotal variable
if (isset($_SESSION['user'])) {
  $userId = $_GET['userId']; 
  echo "<p style='display: none;'>$userId</p>";
  
  }

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
            <li class="offcanvas-cart-item-single" >
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img style="height: 60px" src="admin/<?php echo $productImage; ?>" alt="" class="offcanvas-cart-image">
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="product-details-dynamic.php?id=<?php echo $product['id'];?>" class="offcanvas-cart-item-link"><?php echo $productName ?></a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">
                            <input style="border: 1px solid lightgray; width: 48px" type="number" class="quantity-input" data-product-id="<?php echo $productId; ?>" value="<?php echo $productQuantity; ?>" onchange="updateQuantity(this)">

                            </span>
                            <br>
                            <span class="offcanvas-cart-item-details-price">৳ <?php echo $productPrice * $productQuantity; ?></span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="deleteFromCart" data-product-id="<?php echo $productId;?>"><i class="fa fa-trash-o"></i></a>
                </div>

            </li>
            <hr>
<?php
        }
    }
}
?>
</ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                <span class="offcanvas-cart-total-price-value" id="total-price">৳ <?php echo $subtotal; ?></span>
            </div>
            <ul class="offcanvas-cart-action-button">
            <!-- <li><a href="#" class="btn btn-block btn-golden" id="update-cart-btn">Update Cart</a></li> -->
                <br>
                <li><a href="cart.php" class="btn btn-block btn-golden">View Cart</a></li>
                <li><a href="checkout.php?userId=<?php echo $userId;?>" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
            </ul>





<!-- Include the CDN link for the script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Add your custom script -->
<script>
$(document).ready(function() {
  // Attach a click event listener to the parent element containing the delete links
  $(document).on('click', '.deleteFromCart', function(e) {
    e.preventDefault(); // Prevent the default link behavior

    // Get the product ID
    var productId = $(this).data('product-id');

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
        $('#cart-count').load('./include/header.php #cart-count');
        $('#total-price').load('./include/header.php #total-price');
      },
      error: function(xhr, status, error) {
        // Handle the error if needed
        console.log(error);
      }
    });
  });
});
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

