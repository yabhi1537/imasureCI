<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Add product</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary" id="smplefile"><i class="fa fa-upload" aria-hidden="true"></i></button>
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
                        <form method="post" action="<?php echo base_url('admin/BulkController/store') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Bulk Product</label>
                                    <div class="input-group input-group-merge">
                                        <input type="file" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Product Name" required name="uploadFile" />
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
<script>
$('#smplefile').click(function(e) {
    e.preventDefault();  //stop the browser from following
    window.location.href = '<?php echo base_url('admin-assets/uploads/product.xlsx') ?>';
    window.location.href = '<?php echo base_url('admin-assets/uploads/products.csv') ?>';
});


function myFunction() {
 var price = $("#price").val();
 var qty = $("#quantitty").val();
    if(price!="" && qty!=""){

        var mutiplevalue = price*qty;
        $("#totalamount").val(mutiplevalue);
    }
 
}



</script>
<?php $this->load->view('admin/includes/footer');?>