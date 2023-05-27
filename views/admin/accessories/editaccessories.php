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
                        <h4 class="fw-bold"><span class="text-muted fw-light">Accessories/</span> Edit Accessories</h4>
                        <?php
                            $subcaturl = strtolower(str_replace(" ","-",$accesries[0]['pname']));
                        ?>
                        <a href='<?php echo base_url("accessriess/singleaccesproduct/").$subcaturl?>'><button class='btn btn-sm btn-primary'>View Product</button></a>
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
                        <form method="post" action="<?php echo base_url('admin/accessories/Accessories/updateAccessories/').$accesries[0]['id'] ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Product Name" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required name="productname"  value="<?php echo $accesries[0]['pname'] ?>"/>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="price"
                                        placeholder="Price" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2"  required name="price" value="<?php echo $accesries[0]['price'] ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Quantity</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="quantitty"
                                            placeholder="Quantity" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2"  required name="qty" value="<?php echo $accesries[0]['qty'] ?>" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Discount in Rs..</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Discount in Rs...." aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required name="discount" value="<?php echo $accesries[0]['discount'] ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge">
                                       <select class="form-control" name="category" required >
                                           <option value="<?php echo $accesries[0]['category'] ?>"><?php echo $accesries[0]['category'] ?></option>
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
                                        <input type="file"  name="images" accept='image/*' class="form-control" >
                                    </div>
                                    <input type="hidden" name="oldimage" value="<?php echo $accesries[0]['image'] ?>" />
                                    <img src="<?php echo base_url('admin-assets/uploads/accessories/').$accesries[0]['image'] ?>" height="80" width="80"/>
                                </div>
                            </div>
                         
                            <div class='row'>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Description</label>
                                    <div class="input-group input-group-merge">
                                        <textarea required name="description" id="" cols="30" rows="1" class="form-control"
                                            placeholder="Start Typing Here....." ><?php echo $accesries[0]['description'] ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Key features</label>
                                    <div class="input-group input-group-merge">
                                        <textarea required name="keyfeatures" id="" cols="30" rows="1" class="form-control"
                                            placeholder="Start Typing Here....."><?php echo $accesries[0]['keyfeatures'] ?></textarea>
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