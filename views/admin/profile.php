<?php 

    $this->load->view('admin/includes/header');

?>
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



        <div class="row">


            <!-- Total Revenue -->

            <!--/ Total Revenue -->

        </div>
        <div class="row">
            <!-- Order Statistics -->
            <div class="col-md-3">
                <div class="card h-100 mb-4">
                    
                    <form action="<?php echo base_url('admin/Profile/updateProfile') ?>" method="post" enctype="multipart/form-data">
                        <div class="card-header  pb-0">
                            <div class="card-title mb-0 ml-3">
                                <h5 class="m-0 me-2 text-center mb-3">Profile Photo</h5>
                                <?php
                                   $success1 = $this->session->userdata('success1');
                                   if($success1!=""){?>
                               <div class="alert alert-success"><?php echo $success1 ?></div>
                               <?php } ?>
                               <?php
                                    $failure2 = $this->session->userdata('failure2');
                                    if($failure2!=""){?>
                                <div class="alert alert-danger"><?php echo $failure2 ?></div>
                                <?php } ?>

                                <img src="<?php echo base_url('admin-assets/img/avatars/').$profile[0]['profile'] ?>" alt="" height="240" width="240">
                            </div>
                            <div class="card-title mb-0 ml-3 mt-4">
                                <input type="file" name="profileimage">
                            </div>
                            <div class="card-title mb-0 ml-3 mt-4 text-center">
                                <button class="btn btn-primary" name="submit1">Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card h-100">
                    <div class="card-header  pb-0">
                        <div class="card-title mb-0 text-center">
                            <h5 class="m-0 me-2 mb-2">Profile</h5>
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

                            <form action="<?php echo base_url('admin/Profile/updateProfile') ?>" method="post">
                                <div class="row d-flex mb-3">
                                    <div class="col-md-6">
                                        <label class="form-group mb-2">Username</label>
                                        <input type="text" name="username" placeholder="Enter Username"
                                            class="form-control" value="<?php echo $profile[0]['username'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-group mb-2">Full Name</label>
                                        <input type="text" name="name" placeholder="Enter Full Name"
                                            class="form-control" value="<?php echo $profile[0]['name'] ?>">
                                    </div>
                                </div>
                                <div class="row d-flex mb-3">
                                    <div class="col-md-6">
                                        <label class="form-group mb-2">Mobile Number</label>
                                        <input type="number" name="phone" placeholder="Enter Mobile Number"
                                            class="form-control" value="<?php echo $profile[0]['mobileno'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-group mb-2">Address</label>
                                        <input type="text" name="address" placeholder="Enter Address"
                                            class="form-control" value="<?php echo $profile[0]['address'] ?>">
                                    </div>
                                </div>

                                <button class="btn btn-primary" name="submit">Submit</button>


                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->

            <!--/ Expense Overview -->

            <!-- Transactions -->

            <!--/ Transactions -->
        </div>


    </div>
    <!-- / Content -->




    <!-- Footer -->
    <?php

    $this->load->view('admin/includes/footer');

?>