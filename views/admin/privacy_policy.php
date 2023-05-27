<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4 ">
                    <div class="card-header border-dark d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold"><span class="text-muted fw-light">Privacy Policy</h4>
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
                        <form method="post" action="<?php echo base_url('admin/PrivacyController/update') ?>" enctype="multipart/form-data">
                            <div class="row">
                                
                                <div class="mb-3 col-md-12">
                                    <input type='hidden' id='hdnID' name='hdnID' value='<?php echo $privacy_policy[0]['id'] ?>' />
                                    <label class="form-label" for="basic-icon-default-fullname"></label>
                                        <textarea name="editor1" class='form-control'><?php echo $privacy_policy[0]['policy'] ?></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" name="submit">Submit</button>
                        </form>
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
                        // CKEDITOR.replace( 'use_link' );
                </script>
<?php $this->load->view('admin/includes/footer');?>