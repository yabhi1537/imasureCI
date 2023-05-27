<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category/</span> Sub-Category-Mini</h4>
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
                  
                        <form method="post" action="<?php echo base_url('admin/category/SubcategoryminController/editSubcategorymini/').$subcategory[0]['id'] ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub Category Name</label>
                                    <div class="input-group input-group-merge">
                                        <select name="subcategory_id"  class="form-control" disabled>
                                            <option value="">Select Sub Category</option >
                                            <?php   foreach($category as $categories){ ?>

                                            <option value="<?php echo $categories['id'] ?>"><?php echo $categories['subcat'] ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category-Mini</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" required name="subcategorymini" placeholder="Enter Sub Category" value="<?php echo $subcategory[0]['subcategorymin'] ?>" disabled/>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Image</label>
                                    <div class="input-group input-group-merge">
                                        <input type="file" class="form-control"  name="image" placeholder="Enter Sub Category" value="" disabled/>
                                        <input type="hidden" name="hdnimage" value="<?php echo $subcategory[0]['image'] ?>" disabled>
                                    </div>
                                    <img src="<?php echo base_url('admin-assets/uploads/subcategory/').$subcategory[0]['image'] ?>" alt="" height="80" width="80" readonly>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
<?php $this->load->view('admin/includes/footer');?>