<?php
$myipAddress = $_SERVER['REMOTE_ADDR'];
$cartQuery = "SELECT * FROM cart WHERE ip_address = '$myipAddress'";
$cartResult = $conn->query($cartQuery);

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
?>
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img src="admin/<?php echo $productImage; ?>" alt="" class="offcanvas-cart-image">
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="#" class="offcanvas-cart-item-link"><?php echo $productName ?></a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">
                                <input style="border: 1px solid lightgray; width: 48px" type="number" class="quantity-input" value="<?php echo $productQuantity; ?>">
                            </span>
                            <br>
                            <span class="offcanvas-cart-item-details-price"><?php echo $productPrice; ?></span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                </div>
            </li>
<?php
        }
    }
}
?>