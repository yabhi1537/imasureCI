   <style>
       p{
           color:black !important;
       }
       
   </style>
   
    <meta name="description" content="<?php echo $blog[0]['meta_description'] ?>">
    <meta name="title" content="<?php echo $blog[0]['meta_title'] ?>">
   
  <div class="page-content">
		<div class="holder breadcrumbs-wrap mt-0">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>Blogs</span></li>
					<li><span><?php echo $blog[0]['title'] ?></span></li>
				</ul>
			</div>
		</div>
		<div class="holder">
			<div class="container">
				<div class="page-title text-center">
					<!--<h1>Blog Post</h1>-->
				</div>
				<div class="row">
					<div class="col-md-14 aside aside--content">
						<div class="post-full">
							<h2 class="post-title"><?php echo $blog[0]['heading'] ?></h2>
							<div class="post-links">
							    <?php
                                $newDate = date("M d,Y", strtotime($blog[0]['create_at'])); 
                                ?>
								<div class="post-date"><i class="icon-calendar"></i><?php echo $newDate ?></div>
								<a href="#" class="post-link">by Admin</a>
								<!--<a href="#postComments" class="js-scroll-to"><i class="icon-chat"></i>15 Comment(s)</a>-->
							</div>
							<div class="post-img image-container" style="padding-bottom: 54.44%">
								<img class="lazyload fade-up-fast"
									src="<?php echo base_url('admin-assets/uploads/').$blog[0]['imags'] ?>"
									data-src="<?php echo base_url('admin-assets/uploads/').$blog[0]['imags'] ?>" alt="">
							</div>
						<?php echo $blog[0]['description'] ?>
							<!--<div class="post-bot">-->
							<!--	<ul class="tags-list post-tags-list">-->
							<!--		<li><a href="#">Goodwin</a></li>-->
							<!--		<li><a href="#">Seiko</a></li>-->
							<!--		<li><a href="#">Banita</a></li>-->
							<!--		<li><a href="#">Bigsteps</a></li>-->
							<!--	</ul>-->
							<!--	<a href="#" class="post-share">-->
									<!-- Go to www.addthis.com/dashboard to customize your tools -->
							<!--		<script-->
							<!--			src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d92f2937e44d337"></script>-->
							<!--		<div class="addthis_inline_share_toolbox"></div>-->
							<!--	</a>-->
							<!--</div>-->
						</div>
						
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
