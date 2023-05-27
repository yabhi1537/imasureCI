<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blogs</span></h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <a href="<?php echo base_url('admin/blogs/add') ?>" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i></a>
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
                               <th>S.no</th>
                               <th>Imags</th>
                               <th>Title</th>
                               <th>Heading</th>
                               <th>Meta Title</th>
                               <th>Meta Description</th>
                               <th>Action</th>
                           </tr>
                          <?php if(!empty($bloglist)){ 
                          $i=1; 
                          foreach($bloglist as $blog){  ?>
                             <tr>
                               <th><?php echo $i ?></th>
                               <th><img width='100px;' height='100px;' src='<?php echo base_url('admin-assets/uploads/'.$blog['imags']) ?>' /></th>
                               <th><?php echo $blog['title'] ?></th>
                               <th><?php echo $blog['heading'] ?></th>
                               <th><?php echo $blog['meta_title'] ?></th>
                               <th><?php echo $blog['meta_description'] ?></th>
                               <th>
                                   <a href="<?php echo base_url('admin/blogs/edit/').$blog['id'] ?>" style="color: blue; font-size: 18px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                   <button type="button" style="border: 1px; background: white; color: blue; font-size: 18px;" onclick="deleteFunction(<?php echo $blog['id']  ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                               </th>
                           </tr>
                           
                          <?php $i++; }}else{ ?>
                                
                                <tr>
                                    <th colspan="5">Data not found</th>
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
        url:'<?php echo base_url('admin/BlogsController/deleteBlogs') ?>',
        type:'POST',
        data:{
            id: id },
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