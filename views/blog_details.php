   <style>
       p{
           color:black !important;
       }
       
   </style>
   
    <meta name="description" content="<?php echo $blog[0]['meta_description'] ?>">
    <meta name="title" content="<?php echo $blog[0]['meta_title'] ?>">
   
    <main class="main-wrapper">
        <!-- Start Blog Area  -->
        <div class="axil-blog-area axil-section-gap">
            <div class="axil-single-post post-formate post-standard">
                <div class="container">
                    <div class="content-block">
                        <div class="inner">
                            <div class="post-thumbnail">
                                <!--<h2><?php echo $blog[0]['title'] ?></h2>-->
                                <h2><?php echo $blog[0]['heading'] ?></h2>
                                <img src="<?php echo base_url('admin-assets/uploads/').$blog[0]['imags'] ?>" alt="blog Images" style="height: 600px">
                                <br>
                                <?php
                                $newDate = date("M d,Y", strtotime($blog[0]['create_at'])); 
                                ?>
                                <span>Posted On:  <?php echo $newDate ?></span>
                            </div>
                            <!-- End .thumbnail -->
                        </div>
                    </div>
                    <!-- End .content-blog -->
                </div>
            </div>
            <!-- End .single-post -->
            <div class="post-single-wrapper position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg- axil-post-wrapper">
                            <?php echo $blog[0]['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Area  -->

           
            
        </div>
        </div>
        </div>
       
    </main>
