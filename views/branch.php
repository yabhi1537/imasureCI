<?php

        $this->load->view('includes/header');

?>
<div class="page-content">
   
    <div class="holder">
    <div class="container">
            <div class="title-wrap text-left">
                <h2 class="h2-style">OUR PARTNERS</h2>
            </div>
            <ul class="brand-carousel js-brand-carousel slick-arrows-aside-simple"
                data-slick='{"slidesToShow": 5,  "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 4 }},{"breakpoint": 480,"settings": {"slidesToShow": 2 }}]}'>
                <?php
                foreach($brandslist as $key => $brands){
                    ?>
                    <li>
                        <div>
                            <img class="lazyload lazypreload" data-src="<?php echo base_url('admin-assets/uploads/'.$brands['imags']) ?>" data-sizes="auto" alt="Brand">
                        </div>
                    </li>
                    
                    <?php
                }
                ?>
               
            </ul>
        </div>
</div>
<?php

        $this->load->view('includes/footer');

?>