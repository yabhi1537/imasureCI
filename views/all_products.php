<?php

        $this->load->view('includes/header');

?>
<div class="holder">
        <div class="container">
            <div class="title-wrap title-md">
                <h2 class="h2-style">ALL PRODUCTS</h2>
            </div>
            <div class="prd-grid-wrap position-relative">
                <div
                    class="prd-grid data-to-show-4 data-to-show-lg-3 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-2 js-category-grid ">
                    <div class='row'>
                        
                    
                    <?php
                    
                        foreach($allProduct as $key => $value){
                            $image = explode(',', $value['image']);
                            $proUrl = $string = strtolower(str_replace(' ', '-', $value['product_title']));
                            ?>
                            
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow col-md-3">
                        <div class="prd-inside">
                            <div class="">
                        <!--<img src="<?php echo base_url('assets/images/products/'.$image[0]) ?>">-->
                                <a href="<?php echo base_url('product/'.$proUrl) ?>" class="">
                                    <img src="<?php echo base_url('assets/images/products/'.$image[0]) ?>">
                                    <div class="foxic-loader"></div>
                                </a>
                               
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    
                                    <div class="prd-tag"><a href="<?php echo base_url('product/'.$proUrl) ?>"><?php echo $value['product_title'] ?></a></div>
                                    <h2 class="prd-title"><a href="<?php echo base_url('product/'.$proUrl) ?>"><?php echo $value['pname'] ?></a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora
                                        torquent per
                                        conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="<?php echo base_url('product/'.$proUrl) ?>">
                                            <button class="btn js-prd-addtocart"
                                                data-product='{"name": "Window Air Conditioner", "path":"image/products/product-07-1.jpg", "url":"#", "aspect_ratio":0.778}'>Add
                                                To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="<?php echo base_url('product/'.$proUrl) ?>"
                                                class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                                title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#"
                                                class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                                title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="<?php echo base_url('product/'.$proUrl) ?>"
                                                class="circle-label-qview js-prd-quickview"
                                                data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK
                                                    VIEW</span></a></div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-old">$ 200</div>
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="<?php echo base_url('product/'.$proUrl) ?>">
                                                <button class="btn js-prd-addtocart"
                                                    data-product='{"name": "Window Air Conditioner", "path":"image/products/product-07-1.jpg", "url":"#", "aspect_ratio":0.778}'>Add
                                                    To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                        }
                    ?>
                   </div>
                </div>
            </div>
        </div>
    </div>

<?php 
        $this->load->view('includes/footer');
    ?>