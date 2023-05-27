<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sub-category/</span> Sub-Category</h4>
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
                        <form method="post" action="<?php echo base_url('admin/category/ChildSubCategory/addSubcategory') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category Name</label>
                                    <div class="input-group input-group-merge">
                                        <select name="catname"  class="form-control" required>
                                            <option value="">Select Category</option>
                                            <?php   foreach($sub_category as $categories){ ?>

                                            <option value="<?php echo $categories['id'] ?>"><?php echo $categories['subcat'] ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Child-Sub-Category</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" required name="subcategory" placeholder="Enter Sub Category" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Image</label>
                                    <div class="input-group input-group-merge">
                                        <input type="file" class="form-control"  name="userfile" placeholder="Enter Sub Category" />
                                    </div>
                                </div>

                            </div>


                            <button class="btn btn-primary" name="submit">Submit</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
<?php $this->load->view('admin/includes/footer');?>