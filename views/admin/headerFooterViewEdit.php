<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4 ">
                    <div class="card-header border-dark d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold"><span class="text-muted fw-light">Header & Footer</h4>
                    </div>
                    <div class="card-body ">
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
                        <form method="post" action="<?php echo base_url('admin/HeaderFooterController/update') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Customer care</label>
                                    <input type='hidden' id='hdnID' name='hdnID' value='<?php echo $headerfooter[0]['id'] ?>'  />
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Enter" required name="customercare" value='<?php echo $headerfooter[0]['customer_care'] ?>' />
                                    </div>
                                </div>
                                 <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Sales</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Enter" required name="sales" value='<?php echo $headerfooter[0]['sales_email'] ?>' />
                                    </div>
                                </div>
                                 
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">About Story</label>
                                        <textarea name="editor1" class='form-control'><?php echo $headerfooter[0]['aboute_story'] ?></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Usefull Link</label>
                                        <textarea name="editor2" class='form-control'><?php echo $headerfooter[0]['usefule_link'] ?></textarea>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Contact</label>
                                        <textarea name="editor3" class='form-control'><?php echo $headerfooter[0]['contact'] ?></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Facebook</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Enter" required name="facebook" value='<?php echo $headerfooter[0]['facebook'] ?>' />
                                    </div>
                                </div>
                                 <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Instagram</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Enter" required name="instagram" value='<?php echo $headerfooter[0]['instagram'] ?>' />
                                    </div>
                                </div>
                                 <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Twiter</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Enter" required name="twiter" value='<?php echo $headerfooter[0]['twiter'] ?>' />
                                    </div>
                                </div>
                                 <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Linkdin</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Enter" required name="linkdin" value='<?php echo $headerfooter[0]['linkdin'] ?>' />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Footer Title</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Enter" required name="footer_title" value='<?php echo $headerfooter[0]['footer_text'] ?>' />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
                        CKEDITOR.replace( 'editor1' );
                        CKEDITOR.replace( 'editor2' );
                        CKEDITOR.replace( 'editor3' );
                </script>
<?php $this->load->view('admin/includes/footer');?>