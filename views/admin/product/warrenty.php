<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Warrenty Content</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <a href="<?php echo base_url('admin/product/WarrentyController/addwarrenty') ?>" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
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

                        <table class="table">
                            <tr>
                                <td>S.no</td>
                                <td>Product</td>
                                <td>Warrenty</td>
                                <td class="text-center">Action</td>
                            </tr>
                               

                            <?php $i=1;  foreach($warrenty as $warrentys){  ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $warrentys['pname'] ?></td>
                                    <td><?php echo $warrentys['warrenty'] ?></td>
                                    <td class="text-center"><a href="<?php echo base_url('admin/product/WarrentyController/Deletefeats/').$warrentys['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php $i++;  } ?>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
<?php $this->load->view('admin/includes/footer');?>