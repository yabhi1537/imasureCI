<?php 
    $this->load->view('includes/header');
?>
    <!-- End Header -->
    <main class="main-wrapper">
        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Your Cart</h4>
                        <a href="#" class="cart-clear">Clear Shoping Cart</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <th scope="col" class="product-remove"></th>
                                    <th scope="col" class="product-thumbnail">Product</th>
                                    <th scope="col" class="product-title"></th>
                                    <th scope="col" class="product-price">Price</th>
                                    <th scope="col" class="product-quantity">Quantity</th>
                                    <th scope="col" class="product-subtotal">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $product){  ?>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="#"><img src="<?php echo base_url('admin-assets/uploads/').$product['image'] ?>" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="#"><?php echo $product['description'] ?></a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">&#x20b9; &nbsp;</span><?php echo $product['price'] ?></td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" onchange="subFunction()" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">&#x20b9; &nbsp;</span><?php echo $product['price'] ?></td>
                                </tr>
                                <?php } ?>
                                <!-- <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="#"><img src="assets/images/phone3.webp" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="#">Apple iPhone 14 Pro 1TB Space Black (MQ2G3HN/A)</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="#"><img src="assets/images/padh1.webp" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="#">Apple iPad mini 6th Generation Wi-Fi + Cellular 64GB - Pink (MLX43HN/A)</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-update-btn-area">
                        <div class="input-group product-cupon">
                            <input placeholder="Enter coupon code" type="text">
                            <div class="product-cupon-btn">
                                <button type="submit" class="axil-btn btn-outline">Apply</button>
                            </div>
                        </div>
                        <div class="update-btn">
                            <a href="#" class="axil-btn btn-outline text-decoration-none">Update Cart</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Order Summary</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-subtotal">
                                                <td>Subtotal</td>
                                                <td>$117.00</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td>Shipping</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Free Shippping</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local: $35.00</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Flat rate: $12.00</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-tax">
                                                <td>State Tax</td>
                                                <td>$8.00</td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">$125.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="<?php echo base_url('Checkout') ?>" class="axil-btn bg-dark text-light checkout-btn text-decoration-none">Process to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>
<script>
    function subFunction(){
        alert("hello");
    }
</script>
    <!-- Start Footer Area  -->
   <?php 
     $this->load->view('includes/footer');
   ?>