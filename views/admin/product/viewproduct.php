<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> View product</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <!-- <h5 class="mb-0">Basic with Icons</h5> -->
                        <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                    <?php
                            $success = $this->session->userdata('success');
                            if($success!=""){?>
                        <div class="alert alert-success"><?php echo $success ?></div>
                        <?php } ?>
                        <?php
                            $failure = $this->session->userdata('failure');
                            if($failure!=""){?>
                        <div class="alert alert-danger"><?php echo $failure ?></div>
                    <?php } ?>

                        <form method="post" action="<?php echo base_url('admin/product/ProductController/editProduct/') ?><?php echo $products[0]['id'] ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Title</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            
                                            aria-describedby="basic-icon-default-fullname2" required value="<?php echo $products[0]['product_title'] ?>" readonly name="productname" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required value="<?php echo $products[0]['pname'] ?>" readonly name="productname" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Quantity</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required value="<?php echo $products[0]['qty'] ?>" readonly name="qty" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required value="<?php echo $products[0]['price'] ?>" readonly name="price" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Discount in Rs..</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required value="<?php echo $products[0]['discount'] ?>" readonly name="discount" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge">
                                        <select required name="category" id="" class="form-control"  disabled>
                                            <option <?php echo ($products[0]['category'] == '') ? $redText : ''; ?> value="<?php echo $products[0]['category'] ?>"><?php echo $products[0]['category'] ?></option>
                                            <option value="Laptop">Laptop</option>
                                            <option value="Mobiles">Mobiles</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Description</label>
                                    <div class="input-group input-group-merge">
                                        <textarea required name="description" id=""  cols="30" rows="1" class="form-control"
                                            placeholder="Start Typing Here....." value="<?php echo $products[0]['description'] ?>" disabled> <?php echo $products[0]['description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                               
                                <div class="mb-3 col-md-6">
                                <?php 
                                    $image = $products[0]['image'];
                                    $explodeed = explode(",",$image);
                                    $images = $explodeed[0];
                                ?>

                                   <img src="<?php echo base_url('assets/images/product/') ?><?php echo $images ?>" alt="" height="80" width="80" disabled>
                                </div>
                            </div>
                          

                            <!-- <button class="btn btn-primary" name="submit">Submit</button> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
<?php $this->load->view('admin/includes/footer');?>