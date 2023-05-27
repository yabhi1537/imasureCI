<?php

        $this->load->view('includes/header');

?>

<main class="main-wrapper">





    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
          
            <div class="row d-flex">
                <div class="col-md-6">
                    <h3>Order history</h3>
                    <span>You haven't placed any orders yet.</span>
                </div>
                <div class="col-md-6 text-center">
                    <h3 class="text-right m-0 mt-5">Account details</h3>
                    <span><?php echo  $account[0]['username'] ?></span>
                    <br><br>
                    <a href="<?php echo base_url('Myaccount/address') ?>" class="mt-3">View Address</a>
                </div>
            </div>
        </div>
    </div>


</main>

<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>