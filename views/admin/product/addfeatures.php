<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Features/</span> Add Features</h4>
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
                        <form method="post"  action="<?php echo base_url('admin/product/Productfeatures/addfeatures') ?>" enctype="multipart/form-data">


                            <div class="row">
                                <div class="mb-3 col-md-7">
                                    <label class="form-label" for="basic-icon-default-fullname">Products</label>
                                    <div class="input-group input-group-merge">
                                        <select required name="prodctss" id="productses" class="form-control">
                                            <option value="">Select Products</option>
                                            <?php 
                                                foreach($features as $featuress){
                                            ?>
                                            <option value="<?php echo $featuress['id'] ?>">
                                                <?php echo $featuress['pname'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3 row prigrid">
                            <input type='hidden' id='hdn_id[0]' name='hdn_id[0]' value='0' />
                                <input type="hidden" id='rowno' value='0'>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="featutes[0]" id="featutes"
                                        placeholder="Product Features" required>
                                </div>
                                <button class="col-md-1 btn btn-primary" onclick="showValue()" type="button"
                                    id="submit">Add</button>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

<script>
    $(document).ready(function() {
     $('#productses').select2();
    });
</script>


<script type="text/javascript">
function showValue() {
    let i = $("#rowno").val();
    i++;
    $(".prigrid").append(`<div class="col-md-7 mt-2">
      <input type='hidden' id='hdn_id[` + i + `]' name='hdn_id[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="featutes[` + i + `]" id="featutes[` + i +
        `]" onkeyup="searchFunction(` + i + `)" placeholder="Product Features" >
                           <span style="color: red"></span>
                        </div>
                        `
    );
    $("#rowno").val(i);
}
</script>

<?php $this->load->view('admin/includes/footer');?>