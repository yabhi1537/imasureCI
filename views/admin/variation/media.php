<?php $this->load->view('admin/includes/header');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Buttons/2.0.0/js/buttons.js" integrity="sha512-V1Dio0eEZqyHadQoQ4RuzqgbigOZFxjqnAS2fqaCUKSBXwGxe7BEFO36atwkA6cz5KbnR4oO/yLLI2wyCdKf7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
       
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
               
                <div class='col-md-12 mb-4'>
                    <div class='card'>
                        <div class='card-header'>
                           
                        <a href="<?php echo base_url('admin/variation/Variation/mediaExport') ?>"  class="btn btn-primary btn-sm"><i class="fa fa-download" aria-hidden="true"></i> csv export</a>
                        </div>
                        <div class='card-body'>
                             <table class="table" id="producttable">
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Color</th>
                                <th>Color Name</th>
                                <th style='white-space: nowrap'>Prduct Name</th>
                                <th style='white-space: nowrap'>Prduct Id</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="mytable" >
                                
                            <?php $i=1; 
                                    $r=0;
                            foreach($colorData as $value){ 
                                 $jk = explode(',',$value['images']);
                               //  print_r(count($jk) );die();
                            ?>
                            <tr >
                                <td>
                                    <input type='hidden' id='varID[<?php echo $r ?>]' name='varID[<?php echo $r ?>]' value='<?php echo $value['id'] ?>'  />
                                    <?php echo $i ?></td>
                                <td><div style='background-color:<?php echo $value['color'] ?>;height:20px;width:20px;'></div>
                                <span><?php echo $value['color'] ?></span>
                                </td>
                                <td><?php echo $value['colorcode'] ?></td>
                                <td><input type='hidden' id='proName[<?php echo $r ?>]' value='<?php echo $value['pname'] ?>'  /> <?php echo $value['pname'] ?></td>
                                <td><?php echo $value['product_id'] ?></td>
                                <td>
                                    <input type='hidden' id='hdnurl[<?php echo $r ?>]' name='hdnurl[<?php echo $r ?>]'  value='<?php echo $value['images']?>' />
                                    <button class='btn btn-sm btn-primary' style='white-space: nowrap' onclick='viewImage(<?php echo $r  ?>)'>View Images</button>
                                    <div id='variImg[<?php echo $r ?>]' style='display:none;'>
                                <?php
                                for($i=0; $i<count($jk); $i++){
                                    ?>
                                        
                                    <input type='hidden' id='singleURl[<?php echo $r.$i ?>]' name='singleURl[<?php echo $r.$i ?>]' value='<?php echo $jk[$i] ?>' />
                                    <button class='btn btn-sm btn-primary' onclick='deleteIndvi(<?php echo $r.",".$i ?>)'><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <img src='<?php echo base_url("assets/images/product/").$jk[$i]?>' height='100px;' width='100px;' />
                                    <?php
                                }
                                 ?>
                                    </div>
                                 </td>
                                <td><button class='btn btn-sm btn-danger' onclick="delteVari(<?php echo $value['id'] ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                            </tr>
                            <?php $i++;
                                $r++;
                            } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>



<div class="modal fade bd-example-modal-lg" id='ImageViwer' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style='min-height: 400px;padding: 10px;'>
        
        <h3 id='product_label'></h3>
      <div id='imgContent' style='padding: 20px;'>
          
      </div>
    </div>
  </div>
</div>
<!-- Product Import Model End -->
<script src="//code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="<?php echo base_url('assets/plugin/pagination/src/paginathing.js')?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 
<script>
$(document).ready(function() {
    $('#productses').select2();
    $('#producttable').DataTable();
    debugger;
        $('#producttable').DataTable()({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });
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
function viewImage(id){
    
    var html = $("#variImg\\["+id+"\\]").html();
    var proName = $('#proName\\['+id+'\\]').val();
    
   // alert(proName);
    $("#product_label").html(proName);
    $("#imgContent").html(html);
    
    $("#ImageViwer").modal('show');
}

function delteVari(id){
    
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
               // alert(id);
                $.ajax({
                    type:"post",
                    url:"<?php echo base_url('admin/variation/Variation/variDelete') ?>",
                    data:{id:id},
                }).done(function(res){
                    location.reload();
                })
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

function deleteIndvi(row,imgArr){
    
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
               // alert(id);
                var imagesUrl = $("#hdnurl\\["+row+"\\]").val();
    var image = $("#singleURl\\["+row+imgArr+"\\]").val();
  
    var fullArr = imagesUrl.split(",");
    // alert(fullArr);
    //console.log("full image array ",fullArr);
    const index = fullArr.indexOf(image);
    if (index > -1) { // only splice array when item is found
        fullArr.splice(index, 1); // 2nd parameter means remove one item only
    }
    var varID = $("#varID\\["+row+"\\]").val();
    //console.log(fullArr); 
    $.ajax({
        type:"post",
        url:"<?php echo base_url('admin/variation/Variation/variDeleteInd') ?>",
        data:{id:varID,fullArr:fullArr},
    }).done(function(){
         location.reload();
    })
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