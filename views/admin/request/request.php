<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Request Users</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <!-- <a href="<?php echo base_url('admin/product/Deliverycontent/addeliery') ?>" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> -->
                        <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body" style="width: 100%;overflow-x: scroll;">
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

                        <table class="table" style='width:100%;'>
                            <tr>
                                <td>S.no</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Address</td>
                                <td>Mobile Number</td>
                                <td>Product</td>
                                <td>Action</td>

                                <!-- <td class="text-center">Action</td> -->
                            </tr>
                            <?php if(!empty($request)){ $i=1; foreach($request as $users){ ?>

                                <tr>
                                    <th><?php echo $i ?></th>
                                    <th><?php echo $users['name']  ?></th>
                                    <th><?php echo $users['email']  ?></th>
                                    <th><?php echo $users['address']  ?></th>
                                    <th><?php echo $users['contact_no']  ?></th>
                                    <th><?php echo $users['pname']  ?></th>
                                    <th style="font-size: 20px;" class="text-center"><a href="<?php echo base_url('admin/request/RequestContoller/deleteRequest/').$users['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></th>
                                </tr>

                            <?php $i++; }}else{ ?>
                                <tr>
                                    <td colspan="7" class="text-center">Record not found</td>
                                </tr>
                            <?php } ?>
                           
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