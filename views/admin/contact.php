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
                                <th>S.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Message</th>
                                <th>Action</th>
                                <!-- <td class="text-center">Action</td> -->
                            </tr>
                            <?php if(!empty($contact)){ $i=1; foreach($contact as $users){ ?>

                                <tr>
                                    <th><?php echo $i ?></th>
                                    <th><?php echo $users['name']  ?></th>
                                    <th><?php echo $users['email']  ?></th>
                                    <th><?php echo $users['phone']  ?></th>
                                    <th><?php echo $users['message']  ?></th>
                                    <th>
                                        <a onclick='deleteFunction(<?php echo $users['id'] ?>)'><i style="font-size: 20px;" class="fa fa-trash" aria-hidden="true"></i></a>
                                    </th>
                                </tr>

                            <?php $i++; }}else{ ?>
                                <tr>
                                    <td colspan="5" class="text-center">Record not found</td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
     function deleteFunction(id){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false   
        })
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if(result.isConfirmed) {
                $.ajax({
                    url:'<?php echo base_url("admin/Contactus/deletecontact/'+id+'")?>',
                    type:'POST',
                    // data:{id: id },
                    success:function(data){
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        window.location.reload();
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
        })
    }
    
</script>
<?php $this->load->view('admin/includes/footer');?>