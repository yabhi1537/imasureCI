
<?php $this->load->view('admin/includes/header');?>
<style>
    .descrip{
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    /*.sticky {*/
    /*    position: fixed;*/
    /*    top: 0;*/
    /*}*/
    
</style>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Products</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-end align-items-center">
                        <button class="btn btn-danger" onclick="alldeleteFunction()">Delete</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url('admin/product/ProductController/addProduct') ?>"  class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url('admin/product/ProductController/exportToExcel') ?>" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> csv export</a>
                        <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body" style="width: 100%;overflow-x: auto;height: 600px;">
                        

                        <table class="table" id="producttable">
                            <thead class='sticky'>
                            <tr>
                                <td onclick="selectallFunction()"> <input  type="checkbox" id="selectall" />ALL</td>
                                <td>S.no</td>
                                <td>Item No</td>
                                <td>Product Title</td>
                                <td>Price</td>
                                <td>Category</td>
                                <td>Sub Category</td>
                                <td>Sub-Category-Min</td>
                                <td>Description</td>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody id="mytable">
                            <?php $i=1;  foreach($product as $products){ ?>
                            <tr>
                                <td><input type="checkbox"  value="<?php echo $products['id'] ?>" id="selects[<?php echo $i ?>]" >
                                    <input type="hidden" value="<?php echo $products['id'] ?>" id="productid[<?php echo $i ?>]"/>
                                </td>
                                <td><?php echo $i ?></td>
                                <td><?php echo $products['id'] ?></td>
                                <td><?php echo $products['product_title'] ?></td>
                                <td><?php echo $products['price'] ?></td>
                                <td><?php echo $products['category'] ?></td>
                                <td><?php echo $products['sub_category'] ?></td>
                                <td><?php echo $products['sub_category_min'] ?></td>
                                <td class='descrip'><?php echo $products['description'] ?></td>
                                <?php 
                                    $image = $products['image'];
                                    $explodeed = explode(",",$image);
                                    $images = $explodeed[0];
                                ?>
                                <td class="text-center"><img src="<?php echo base_url('assets/images/product/').  $images ?>" alt="" height="50" width="50"></td>
                                <td>
                                    <?php
                                        $prnameurl = strtolower(str_replace(" ","-",$products['product_title']));
                                    ?>
                                    <a href="<?php echo base_url('admin/product/ProductController/editProduct/').$products['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a  onclick='deleteFunction(<?php echo $products['id'] ?>)' ><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a target='_blanck' href="<?php echo base_url("singleproduct/".$prnameurl) ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
<link  href='https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css'/>
<link href='https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script type="text/javascript">
     $(document).ready(function () {
        //  debugger;
    //   $('#producttable').DataTable()
        //  $('#producttable').DataTable( {
        //     dom: 'Bfrtip',
        //     buttons: [
        //         'copy', 'csv', 'excel', 'pdf', 'print'
        //     ]
        // } );
 
    });
 </script>
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
                    url:'<?php echo base_url("admin/product/ProductController/delProduct/'+id+'")?>',
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

    function exportToexcel(){
        $("table").table2csv({
            filename: 'table.csv'
        });
    }
    
    function selectallFunction(){
        
        // var rowCount = $('#mytable tr').length;
        
        // for(i=1; i < rowCount; i++){
            if($("#selectall").prop('checked') == true){
                $('input:checkbox').attr('checked','checked');
            }else{
                $('input:checkbox').removeAttr('checked');
            }
        // }
    }
    
</script>
<script>
    function alldeleteFunction(){
        
       var rowCount = $('#mytable tr').length;
        
        
        
        for(i=1; i < rowCount; i++){
           
           if($("#selects\\["+i+"\\]").prop('checked') == true){
                
               var prdid  =  $("#selects\\["+i+"\\]").val();
                        
                    $.ajax({
                    url:'<?php echo base_url('admin/product/ProductController/deleteall') ?>',
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
</script>


<?php $this->load->view('admin/includes/footer');?>