<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Category</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <a href="<?php echo base_url('admin/category/CategoryController/addCategory') ?>" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
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

                        <table class="table table-bordered">
                            <tr>
                                <td>S.no</td>
                                <td>Category Id</td>
                                <td>Category Name</td>
                                <td>Image</td>
                                <td class="text-center">Action</td>


                            </tr>
                            <?php $i=1;  foreach($category as $categories){ ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $categories['id'] ?></td>
                                <td><?php echo $categories['catname'] ?></td>
                                <td><img src="<?php echo base_url('admin-assets/uploads/category-image/') ?><?php echo $categories['image'] ?>" alt="" height="80" width="80"></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/category/CategoryController/editCategory/').$categories['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a  onclick='deleteFunction(<?php echo $categories['id'] ?>)' ><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                    <!--<a  href="<?php echo base_url('admin/category/CategoryController/delCategory/').$categories['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;-->
                                    <a href="<?php echo base_url('admin/category/CategoryController/viewCategory/').$categories['id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </td>



                            </tr>

                            <?php $i++; } ?>
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
                    url:'<?php echo base_url("admin/category/CategoryController/delCategory/'+id+'")?>',
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