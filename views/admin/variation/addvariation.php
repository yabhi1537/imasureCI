<?php $this->load->view('admin/includes/header');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Buttons/2.0.0/js/buttons.js" integrity="sha512-V1Dio0eEZqyHadQoQ4RuzqgbigOZFxjqnAS2fqaCUKSBXwGxe7BEFO36atwkA6cz5KbnR4oO/yLLI2wyCdKf7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
       
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h4 class="fw-bold"><span class="text-muted fw-light">Product/</span> Add Product Variation</h4>
                        <!-- <h5 class="mb-0">Basic with Icons</h5> -->
                        <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                        <?php
                            $success = $this->session->userdata('success');
                            if ($success != "") {?>
                                <div class="alert alert-success"><?php echo $success ?></div>
                            <?php }?>
                            <?php
                            $failure = $this->session->userdata('failure');
                            if ($failure != "") {?>
                                <div class="alert alert-danger"><?php echo $failure ?></div>
                        <?php }?>
                                <form method="post" action="<?php echo base_url('admin/variation/Variation/store') ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="mb-3 col-md-10">
                                            <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                            <div class="input-group input-group-merge">
                                                <select class="form-control" id="productses" name="product">
                                                    <option value="">Select Product</option>
                                                    <?php foreach ($product as $prosuctsss) {?>
                                                    <option value="<?php echo $prosuctsss['id'] ?>">
                                                        <?php echo $prosuctsss['pname'] ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label" for="basic-icon-default-fullname">Color</label>
                                            <div class="input-group input-group-merge">
                                                <input type="color" name="colorcode" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-10">
                                            <label class="form-label" for="basic-icon-default-fullname">Color Name</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" name="color" class="form-control" placeholder="Enter Color name" />
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="mb-3 col-md-10">
                                        <label class="form-label" for="basic-icon-default-fullname">Images</label>
                                        <div class="input-group input-group-merge">
                                            <input type="file" name="files[]" class="form-control" accept="image/*" multiple />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-10">
                                        <label class="form-label" for="basic-icon-default-fullname">Images Url <small>(Multiple images for use ,)</small></label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="imageUrl" class="form-control" />
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm" name="submit">Submit</button>
                                    
                                     <a  class="btn btn-primary btn-sm text-light" data-toggle="modal" data-target="#exampleModal" >Import</a>
<a href='<?php echo base_url('assets/format/color_variation.xlsx') ?>' class="btn btn-primary btn-sm" name="submit">Download</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>

<!-- Product Import Model Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import bulk Variation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/variation/Variation/bulk_store') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class='form-group'>
                                <label for="">Select File</label>
                                <input type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"class='form-controle' id="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <a  href="<?php echo base_url('assets/format/color_variation.xlsx') ?>" class="btn btn-primary">Download</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Product Import Model End -->
<script src="//code.jquery.com/jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="<?php echo base_url('assets/plugin/pagination/src/paginathing.js')?>"></script>
<script>
$(document).ready(function() {
    $('#productses').select2();
});
</script>
<!--<script>-->
<!--    $('table').paginathing({-->
<!--        perPage: 5,-->
<!--        firstText:'<',-->
<!--        lastText:'>'-->

<!--    })-->
<!--</script>-->

<script>
function myFunction() {
    var price = $("#price").val();
    var qty = $("#quantitty").val();
    if (price != "" && qty != "") {

        var mutiplevalue = price * qty;
        $("#totalamount").val(mutiplevalue);
    }

}
</script>
<?php $this->load->view('admin/includes/footer');?>