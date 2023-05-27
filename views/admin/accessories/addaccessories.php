<?php $this->load->view('admin/includes/header');?>
<style>
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="fw-bold"><span class="text-muted fw-light">Accessories/</span> Add Accessories</h4>
       
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
                        <form method="post" action="<?php echo base_url('admin/accessories/Accessories/store') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Product Name" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required name="productname" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="price"
                                        placeholder="Price" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2"  required name="price" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Quantity</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="quantitty"
                                            placeholder="Quantity" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2"  required name="qty" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Discount in Rs..</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Discount in Rs...." aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required name="discount" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge">
                                       <select class="form-control" name="category" required >
                                           <option value="">--Select Category--</option>
                                           <option value="mac">Mac</option>
                                           <option value="iphone">Iphone</option>
                                           <option value="ipad">Ipad</option>
                                           <option value="watch">Watch</option>
                                       </select>
                                    </div>
                                </div>
                                  <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product image</label>
                                    <div class="input-group input-group-merge">
                                        <input type="file"  name="images" accept='image/*' class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='row'>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Description</label>
                                    <div class="input-group input-group-merge">
                                        <textarea required name="description" id="" cols="30" rows="1" class="form-control" placeholder="Start Typing Here....."></textarea>
                                    </div>
                                </div>
                            
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Key features</label>
                                    <div class="input-group input-group-merge">
                                        <textarea required name="keyfeatures" id="keyfeatures" cols="30" rows="1" class="form-control"
                                            placeholder="Start Typing Here....."></textarea>
                                    </div>
                                </div>
                            </div>
                             <div class='row'>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Meta Title</label>
                                    <div class="input-group input-group-merge">
                                        <textarea required name="description" id="" cols="30" rows="1" class="form-control" placeholder="Start Typing Here....."></textarea>
                                    </div>
                                </div>
                            
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Meta Description</label>
                                    <div class="input-group input-group-merge">
                                        <textarea required name="keyfeatures" id="keyfeatures" cols="30" rows="1" class="form-control"
                                            placeholder="Start Typing Here....."></textarea>
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
<script>
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