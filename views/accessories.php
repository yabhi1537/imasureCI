<?php

        $this->load->view('includes/header');

?>
<style>
.addtocard {
    background: black;
    color: white;
    width: 223px;
    height: 50px;
    border-radius: 13px;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="header-top-campaign border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-6 col-md-10">
                <div class="  ">
                    <div class="">
                        <div class="d_flex row" >
                            <div id="subcategory" style="color: black;">
                      <!--</br>-->
                      <ul class="list-unstyled d-flex justify-content-between">
                          <?php
                          foreach($acccategory as $key => $value){
                              ?>
                                <li style='cursor:pointer;'  class="subcategort"> <a href="<?php echo base_url('accessriess/Singleaccesproduct/Category/').$value['category'] ?>"> <img style="max-width: 100%; max-height: 100%;" src="<?php echo base_url('admin-assets/uploads/').$value['catimg'] ?>">
                                    <p style="color:white;"><?php echo $value['category']?></p></a>
                                </li>
                              <?php
                          }
                          ?>
                      </ul>
                             
                            <!--<div class="pd col-md-6">-->
                            <!--    <svg id="Outlines" xmlns="http://www.w3.org/2000/svg" width="84" height="54"-->
                            <!--        viewBox="0 0 84 54">-->
                            <!--        <rect width="84" height="54" fill="none" />-->
                            <!--        <path-->
                            <!--            d="M33.5281,50H1.5179A1.5181,1.5181,0,0,1,0,48.4817V47.5H5s0-26.6961.0015-27.4323c.0009-.5075.0022-.8347.0041-1.0819.0022-.2439.0053-.4109.0094-.5453a5.5844,5.5844,0,0,1,.0455-.5987A2.2625,2.2625,0,0,1,5.257,17.16a1.9219,1.9219,0,0,1,.9039-.903,2.27,2.27,0,0,1,.6815-.196,5.5469,5.5469,0,0,1,.6-.0458c.1349-.0044.3021-.0075.5465-.01.2476-.0023.5751-.0035,1.0825-.0044C9.4142,16.0007,9.8221,16,10.3987,16H47.6013c.5766,0,.9845.0007,1.3272.0012.5074.0009.8349.0021,1.0825.0044.2444.0021.4116.0052.5465.01a5.5426,5.5426,0,0,1,.6.0458,2.27,2.27,0,0,1,.6815.196,1.9234,1.9234,0,0,1,.9041.903,2.2683,2.2683,0,0,1,.1963.6815,5.5844,5.5844,0,0,1,.0455.5987c.0041.1344.0072.3014.0094.5453.0019.2472.0032.5744.0041,1.0819,0,.1111,0,.8206.0005,1.9325h-1.5c0-1.1011,0-1.8088-.0005-1.93-.0009-.5024-.0022-.827-.0041-1.0721-.002-.2275-.0048-.3845-.0087-.5109a4.1105,4.1105,0,0,0-.0317-.4363.7884.7884,0,0,0-.0631-.2412.4247.4247,0,0,0-.2-.1991.7964.7964,0,0,0-.2433-.0635,4.1546,4.1546,0,0,0-.4393-.0319c-.1259-.004-.2824-.0068-.511-.0089-.2454-.0022-.57-.0034-1.0718-.0043L47.6007,17.5l-15.8225,0v.0148a.9967.9967,0,0,1-.9967.9967h-3.563a.9967.9967,0,0,1-.9967-.9967V17.5l-15.8224,0-1.3254.0012c-.5022.0009-.8263.0021-1.0713.0043-.229.0021-.3855.0049-.5116.0089a4.1609,4.1609,0,0,0-.4392.0319.7944.7944,0,0,0-.2431.0635.4226.4226,0,0,0-.1159.0815.4292.4292,0,0,0-.0843.1191.7818.7818,0,0,0-.0628.2409,4.1463,4.1463,0,0,0-.0316.4382c-.0038.1233-.0066.28-.0086.5095-.0019.2434-.0032.568-.0041,1.0714C6.5,20.8809,6.5,47.3631,6.5,47.4969V47.5H32v1.1917l.147.24A3.049,3.049,0,0,0,33.5281,50ZM78.99,47H84v1.41c-.64,1.03-4.47,1.57-5.84,1.57H38.45c-1.35,0-4.82-.54-5.45-1.57V47h5V24.49c0-.0134,0-.0269,0-.04A1.47,1.47,0,0,1,39.47,23l.0205,0H77.5l.02,0,.02,0a1.47,1.47,0,0,1,1.45,1.49ZM77,24.98H39.99V47H77Z"-->
                            <!--            fill="#1d1d1f" />-->
                            <!--    </svg>-->
                            <!--    <small>MacBook Pro</small>-->
                            <!--</div>-->
                            <!--<div class="pd col-md-6">-->
                            <!--    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="54" viewBox="0 0 43 54">-->
                            <!--        <g fill="none" fill-rule="evenodd">-->
                            <!--            <rect width="43" height="54" />-->
                            <!--            <path fill="#1D1D1F" fill-rule="nonzero"-->
                            <!--                d="M41.5,14 L1.5,14 C0.671572875,14 0,14.6715729 0,15.5 L0,41.5 C0,42.3284271 0.671572875,43 1.5,43 L41.5,43 C42.3284271,43 43,42.3284271 43,41.5 L43,15.5 C43,15.1021753 42.8419647,14.7206444 42.5606602,14.4393398 C42.2793556,14.1580353 41.8978247,14 41.5,14 Z M27,43.5 L27,50 L16,50 L16,43.5 L27,43.5 Z M42,15 L42,38 L1,38 L1,15 L42,15 Z" />-->
                            <!--        </g>-->
                            <!--    </svg>-->
                            <!--    <small>iMac 24</small>-->
                            <!--</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="main-wrapper">
    <section class="py-5">
        <div class="container">
            <div class="section-title-wrapper">
                <!--<h2 class="title" style="text-transform: capitalize;"><?php echo $categorysaasa[0]['catname'] ?></h2>-->
            </div>
            <div class="row">
                <?php  if(!empty($allacces)){ foreach($allacces as $allaccesries){ 
                   $imagesnnm =  explode(",",$allaccesries['image']);
                   $imagesname  =$imagesnnm[0];
                //   print_r($imagesname);
                ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 prod-sect">
                    <div class="axil-product product-style-one">
                        <div class="thumbnail">
                            <a href="<?php echo base_url('accessriess/singleaccesproduct/').$allaccesries['pname'] ?>" tabindex="0">
                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy"
                                    class="main-img sal-animate"
                                    src="<?php echo base_url('admin-assets/uploads/accessories/').$imagesname ?>"
                                    alt="Product Images">
                                <img class="hover-img"
                                    src="<?php echo base_url('admin-assets/uploads/accessories/').$imagesname ?>"
                                    alt="Product Images">
                            </a>
                            <div class="label-block label-right">
                                <div class="product-badget">SALE</div>
                            </div>

                        </div>
                        <div class="product-content">
                            <div class="inner text-center">
                                <h4 class="title"><a href="<?php echo base_url('singleproduct/').$allaccesries['pname'] ?>"
                                        tabindex="0"><?php echo $allaccesries['pname'] ?></a></h4>
                                 <h5 class="title"><a href="<?php echo base_url('singleproduct/').$allaccesries['pname'] ?>"
                                        tabindex="0"><?php echo $allaccesries['description'] ?></a></h5>
    
                                <div class="product-price-variant my-3">
                                    <span class="price current-price"><?php echo $allaccesries['price'] ?></span>
                                    <span
                                        class="price old-price"><?php echo $allaccesries['price'] +  $allaccesries['discount'] ?></span>
                                </div>
                                <div class="product-">
                                    <ul class="cart-action">
                                        <li class="select-option w-50 bg-light">
                                             <a href="<?php echo base_url('singleproduct/').$allaccesries['pname'] ?>" style="margin-left:-45px;" class="addtocard" tabindex="0">Add To Cart</a>
                                            <!--<a href="<?php echo base_url('singleproduct/').$allaccesries['pname'] ?>"-->
                                            <!--    tabindex="0">-->
                                            <!--    Add to Cart-->
                                            <!--</a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}else{ ?>
                
                <h3>There is no Products Related to on this Category</h3>
                
                <?php } ?>
              
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-lg-12 text-center mt--20 mt_sm--0">-->
            <!--        <a href="#" class="axil-btn btn-bg-lighter btn-load-more">View All</a>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
   

    <div class="axil-why-choose-area  pb_sm--30 py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/telephone-call.png" alt="Service">
                        </div>
                        <h6 class="title">For Sales</h6>
                        <p>Call us:- <a href="tel:+919826722345">+919826722345</a></p>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/telephone-call.png" alt="Service">
                        </div>
                        <h6 class="title">for after sales</h6>
                        <p>Call us:- <a href="tel:+919302100512">+919302100512</a></p>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/email.png" alt="Service">
                        </div>
                        <h6 class="title">for after sales</h6>
                        <!--<p> Contact Us:- <a href="mailto:sanjayneema@horizoncomputers.co.in"></a></p>-->
                        <p>Contact us  <a href="mailto:sanjayneema@horizoncomputers.co.in">sanjayneema@horizoncomputers.co.in</a></p>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/email.png" alt="Service">
                        </div>
                        <h6 class="title">For Sales</h6>
                        <p>Contact us <a href="mailto:tarun@horizoncomputers.co.in">tarun@horizoncomputers.co.in</a></p>
                        <!--<p>Contact Us:-<a href="mailto:tarun@horizoncomputers.co.in"></a>tarun@horizoncomputers.co.in</p>-->
                    </div>
                </div>

            </div>
        </div>
    </div>




</main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title proHeding" id="exampleModalLabel">
                    
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('Singleproduct/addCard') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="hidden" name="hidenid" id='hidenid'>
                        <input type="hidden" name="hidurl" id='hidurl' value='1'>
                        <input type="text" class="form-control" name="name" required placeholder="Enter Full Name">

                    </div>
                    <div class="form-group">
                        <label for="">Email </label>
                        <input type="email" class="form-control" name="email" required placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="number" class="form-control" name="mobile" required
                            placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" required placeholder="Enter Address">
                    </div>
                </div>
                <div class="modal-footer w-0">
                    <button type="submit" class="savechanges btn btn-primary">Save
                        changes</button>
                    <button type="button" class="savechanges btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    function showProduct(id){
        // alert(id);
        $.ajax({
            type:"post",
            url:"<?php echo base_url('Products/getCategoryProduct')?>",
            data:{id:id},
        }).done(function(res){
            alert(res);
        })
    }

    function request(id){
        // alert(id);
        // alert(proname);
        $("#hidenid").val(id);
        $(".proHeding").html( $("#hidname\\["+id+"\\]").val());
        $("#exampleModal").modal('show');
    }
</script>
<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>