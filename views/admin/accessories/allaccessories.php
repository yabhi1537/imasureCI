<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Accessories</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-end align-items-center">
                        <a href="<?php echo base_url('admin/accessories/Accessories/addAccessories') ?>" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        <button class="btn btn-danger" onclick="alldeleteFunction()">Delete</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url('admin/accessories/Accessories/exportToExcel') ?>" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> csv export</a>
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
                                <td onclick="selectallFunction()"> <input  type="checkbox" id="selectall" />ALL</td>
                                <td>S.no</td>
                                <td>Products</td>
                                <td>Qty</td>
                                <td>Price</td>
                                <td>Category</td>
                                <td>Discount</td>
                                <td>Description</td>
                                <td>Image</td>
                                <td>Action</td>


                            </tr>
                             <tbody id="mytable">
                            <?php $i=1;  foreach($accesries as $products){ ?>
                            <tr>
                                <td><input type="checkbox"  value="<?php echo $products['id'] ?>" id="selects[<?php echo $i ?>]" >
                                    <input type="hidden" value="<?php echo $products['id'] ?>" id="productid[<?php echo $i ?>]"/>
                                </td>
                                <td><?php echo $i ?></td>
                                <td><?php echo $products['pname'] ?></td>
                                <td><?php echo $products['qty'] ?></td>
                                <td><?php echo $products['price'] ?></td>
                                <td><?php echo $products['category'] ?></td>

                                <td><?php echo $products['discount'] ?></td>
                                <td><?php echo $products['description'] ?></td>

                               
                                <!--<td class="text-center"><img src="<?php echo base_url('admin-assets/uploads/accessories/') ?><?php echo $products['image'] ?>" alt="" height="80" width="80"></td>-->
                                <!--<td>-->
                                
                                <?php 
                                    $image = $products['image'];
                                    $explodeed = explode(",",$image);
                                    $images = $explodeed[0];
                                ?>
                                <td class="text-center"><img src="<?php echo base_url('admin-assets/uploads/accessories/').  $images ?>" alt="" height="50" width="50"></td>
                                <td>
                                    
                            
                                    <a  href="<?php echo base_url('admin/accessories/Accessories/editAccessories/').$products['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                    <button onclick="delFunction(<?php echo $products["id"] ?>)" style="background: white;  border: 1px; color: #4545fb;"><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;&nbsp;
                                    <!--<a href="<?php echo base_url('admin/accessories/Accessories/editAccessories/').$products['id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>-->
                                </td>



                            </tr>

                            <?php $i++; } ?>
                             </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

function alldeleteFunction(){
        
       var rowCount = $('#mytable tr').length;
        
        
        
        for(i=1; i < rowCount; i++){
           
           if($("#selects\\["+i+"\\]").prop('checked') == true){
                
               var prdid  =  $("#selects\\["+i+"\\]").val();
                        
                    $.ajax({
                    url:'<?php echo base_url('admin/accessories/Accessories/deleteall') ?>',
                    type:'POST',
                    data:{  id: prdid },
                    success:function(data){
                       new swal({
                          title: "Deletd",
                          text: "Deleted succesfully",
                          icon: "success",
                        })
                      window.location.reload();
                    }
                    });

                }
            
        }
       
       return false;
    }

    function delFunction(id){
        const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be delete this accessories!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
          $.ajax({
     type: "POST",
     url: "<?php echo base_url('admin/accessories/Accessories/delAccessories') ?>",
     data: {  id: id},
     success: function(data) {
         
        swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your accessories has been deleted.',
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
      'Your accessories is safe :)',
      'error'
    )
  }
})

        
    }
</script>
<?php $this->load->view('admin/includes/footer');?>