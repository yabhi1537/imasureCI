<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url() ?>">Home</a></li>
                <li><span>Our Blog</span></li>
            </ul>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="page-title text-center">
                <h1>Blog Grid</h1>
            </div>
            <div class="post-prws-grid row">
                <?php
                    foreach($bloglist as $key => $value){
                        $newDate = date("M d,Y", strtotime($value['create_at'])); 
                        ?>
                    <div class="col-sm-9 col-md-6">
                        <div class="post-prw-simple">
                            <div class="post-prw-img">
                                <a href="<?php echo base_url('blog/'.$value['id']) ?>" class="image-hover-scale image-container"
                                    style="padding-bottom: 54.44%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="<?php echo base_url('admin-assets/uploads/').$value['imags'] ?>" class="lazyload fade-up" alt="Post name">
                                </a>
                            </div>
                            <div class="post-prw-links">
                                <div class="post-prw-date"><?php echo $newDate ?></div>
                                <div class="post-prw-author">by admin</div>
                            </div>
                            <h4 class="post-prw-title"><a href="<?php echo base_url('blog/'.$value['id']) ?>"><?php echo $value['title'] ?></a></h4>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
            <div class="pagination-wrap d-flex mt-4 justify-content-center">
                <ul class="pagination mt-0">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>