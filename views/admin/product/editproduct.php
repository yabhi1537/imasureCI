<style>
.ridge {
    border-style: ridge;
}
</style>
<?php $this->load->view('admin/includes/header');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/virtual-select.min.css"> 
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="fw-bold"><span class="text-muted fw-light">Product/</span> Edit Product</h4>
                        <?php
                        $prnameurl = strtolower(str_replace(" ","-",$products[0]['product_title']));
                        ?>
                        <a href='<?php echo base_url("singleproduct/".$prnameurl) ?>' target='_blanck'><button class='btn btn-sm btn-primary' style="float: right;margin-top: -40px;" >View Product</button></a>
                    </div>
                    <div class="card-body">
                        <?php
                        $success = $this->session->userdata('success');
                        if ($success != "") {?>
                            <div class="alert alert-success"><?php echo $success ?></div>
                        <?php }?>
                        <?php
                        $failure = $this->session->userdata('failure');
                        if ($failure != "") {?>
                            <div class="alert alert-danger"><?php echo $failure ?></div>
                        <?php }?>

                        <form method="post"
                            action="<?php echo base_url('admin/product/ProductController/editProduct/') ?><?php echo $products[0]['id'] ?>"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Title</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" placeholder="Product Title"
                                            aria-describedby="basic-icon-default-fullname2" required
                                            value="<?php echo $products[0]['product_title'] ?>" name="producttitle"
                                            id="producttitle" />
                                    </div>
                                    <label id='vname_message'></label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required
                                            value="<?php echo $products[0]['pname'] ?>" name="productname"
                                            id="productnamess" onChange="return checkvName()" />
                                    </div>
                                    <label id='vname_message'></label>
                                </div>
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Quantity</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="qty"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required
                                            value="<?php echo $products[0]['qty'] ?>" name="qty" onkeyup="myFunction()" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="price"
                                            aria-describedby="basic-icon-default-fullname2" required
                                            value="<?php echo $products[0]['price'] ?>" name="price" onkeyup="myFunction()"/>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Discount in Rs..</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="John Doe" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2"
                                            value="<?php echo $products[0]['discount'] ?>" name="discount" />
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->

                            <!--<div class="row">-->
                          
                                <!-- <div class="mb-3 col-md-6 categoryshow">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge">
                                        <select required name="category" id="categoesies"   class="form-control"
                                            onchange="showSubcatefunction()">
                                            <option value="<?php echo $products[0]['category'] ?>">
                                               <?php echo $products[0]['category'] ?></option>
                                            <?php
                                            foreach ($category as $categories) {
                                                $categoryid = explode(",",$products[0]['category']);
                                            ?>
                                            
                                            <option <?php  echo ($products[0]['category'] == $categories['id'])? "selected":""; ?> >
                                                <?php echo $categories['catname'] ?></option>
                                            <?php }?>
                                             <option value="2">2</option> 

                                        </select>
                                    </div>
                                </div> -->
                                    
                                <div class="mb-3 col-md-6 categoryshowmultiple">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge">
                                        <select required name="category" id="categoesies"  multiple  data-search="true" data-silent-initial-value-set="true" class=" multipleSelect"
                                            onchange="showSubcatefunction()">
                                            <!--<option value="<?php echo $products[0]['category'] ?>">-->
                                            <!--    <?php echo $products[0]['category'] ?></option>-->
                                            <?php
                                            foreach ($category as $categories) {
                                                $categoryid = explode(",",$products[0]['category']);
                                            ?>
                                            
                                            <option <?php foreach($categoryid as $key => $valcategoryid){ echo ($valcategoryid == $categories['id'])? "selected":""; }?> value="<?php echo $categories['id'] ?>" >
                                                <?php echo $categories['catname'] ?></option>
                                            <?php }?>
                                            <!-- <option value="2">2</option> -->

                                        </select>
                                    </div>
                                </div>
                                   
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category</label>
                                    <div class="input-group input-group-merge">
                                        <select name="subcate" id='subcategorymy' class="form-control" required>
                                            <option value="<?php echo $products[0]['sub_category'] ?>">
                                                <?php echo $products[0]['sub_category'] ?></option>
                                            <?php foreach ($subcategory as $subcat) {?>
                                            <option <?php echo ($subcat['id'] == $products[0]['sub_category'])?"selected='selected'":""  ?> value="<?php echo $subcat['id'] ?>"><?php echo $subcat['subcat'] ?>
                                            </option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category-Mini</label>
                                    <div class="input-group input-group-merge">
                                       <select name="subcategorymin" id='subcategorymymini' multiple data-search="true" data-silent-initial-value-set="true" class="multipleSelects" >
                                           <option value="">Select Subcategory Mini</option>
                                           <?php  foreach($subcategorymini as $subcatemin){  
                                            $categoryid = explode(",",$products[0]['sub_category_min']);
                                            ?>
                                           
                                            <option <?php foreach($categoryid as $key => $valcategoryid){ echo ($valcategoryid == $subcatemin['id'])? "selected":""; }?> value="<?php echo $subcatemin['id'] ?>" >
                                                <?php echo $subcatemin['subcategorymin'] ?></option>
                                            <?php } ?>
                                           
                                       </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--<div class="mb-3 col-md-6">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Total Amount</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="text"  id="totalamount" class="form-control" value='<?php echo $products[0]['price']*$products[0]['qty'] ?>' readonly>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product images</label>
                                    <div class="input-group input-group-merge">
                                        <input type="file" name="files[]" class="form-control" accept='image/*'
                                            multiple>
                                        <input type="hidden" name="hdnimage" id='hdnimage'
                                            value="<?php echo $products[0]['image'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Item Type</label>
                                    <div class="input-group input-group-merge">
                                         <input type="radio"  value="1" name="itemType" <?php echo ($products[0]['item_type'] == 1)?'checked' : ""  ?> required />&nbsp;Product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="radio" value="0" name="itemType" <?php echo ($products[0]['item_type'] == 0)?'checked' : ""  ?> required />&nbsp;Accessories
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                <input type='hidden' id='thmsImg' name='thmsImg' value='<?php echo $products[0]['image'] ?>'/>
                                    <?php
                                $image = $products[0]['image'];
                                $explodeed = explode(",", $image);
                                $images = $explodeed[0];
                                foreach($explodeed as $key => $ImagesVal){
                                    ?>
                                    <input type='hidden' name='thmSigImg[<?php echo $key ?>]' id='thmSigImg[<?php echo $key ?>]' value='<?php echo $ImagesVal ?>' />
                                    <i class="fa fa-trash" aria-hidden="true" id='thmsDelBtn[<?php echo $key ?>]' onclick='deleteThamImg(<?php  echo $key ?>)' style="margin-left: 1px;position: absolute;cursor: pointer;"></i>
                                    <img src="<?php echo base_url('assets/images/product/') . $ImagesVal ?>" id='thamImg[<?php echo $key ?>]' alt=""
                                        height="80" width="80" >
                                    
                                    <?php
                                }
                                
                                ?>
                                        
                                </div>
                            </div>
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Sale Message</label>
                                    <div class="input-group input-group-merge">
                                        <?php
                                        if ($products[0]['sales'] == "1") {
                                        ?>
                                        <input type="radio" value="1" name="sale" checked required />&nbsp;Yes
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" value="0" name="sale" required />&nbsp;No
                                        <?php } else if ($products[0]['sales'] == "0") {?>
                                        <input type="radio" value="1" name="sale" required />&nbsp;Yes
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" value="0" name="sale" checked required />&nbsp;No
                                        <?php } else {?>
                                        <input type="radio" value="1" name="sale" required />&nbsp;Yes
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" value="0" name="sale" required />&nbsp;No
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <input type='color' name='color' value='red' />
                                </div>
                            </div>

                            <div class="row">
                                <label>Description</label>
                                <?php
                                    $descrtitp = $products[0]['description'];
                                    $egyhdjnn = explode("|", $descrtitp);
                                    // print_r($egyhdjnn);
                                    ?>
                                <div class="mb-3 col-md-5 peorycdesc">
                                    <?php foreach ($egyhdjnn as $key => $value) {?>
                                    <input type='hidden' id='deschdn_id[<?php echo $key ?>]' name='deschdn_id[<?php echo $key ?>]' value='<?php echo $key ?>' />
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Description</label>-->
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="description" name="description[<?php echo $key ?>]"
                                            value="<?php echo $value ?>" class="form-control mt-2"
                                            placeholder="Product Description" required>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <input type="hidden" id='descrowno' value='<?php echo $key ?>'>
                                    <buttom class="btn btn-primary" id="submitfeature" onclick="showAddvalue()">Add
                                    </buttom>
                                </div>

                                <?php
                                    $fayatts = $products[0]['feature'];
                                    $fefautytuhs = explode("|", $fayatts);
                                    ?>

                                <div class="mb-3 col-md-5 prigrid">
                                    <label>Product Featutes</label>
                                    <?php foreach ($fefautytuhs as $key => $value) {?>
                                    <input type='hidden' id='hdn_id[<?php echo $key ?>]' name='hdn_id[<?php echo $key ?>]' value='<?php echo $key ?>' />
                                    
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Feature</label>-->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="featutes[<?php echo $key ?>]" id="featutes"
                                            value="<?php echo $value ?>" class="form-control mt-2"
                                            placeholder="Product Feature" required>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <input type="hidden" id='rowno' value='<?php echo $key ?>'>
                                    <buttom class="btn btn-primary" id="submit" onclick="showValue()">Add
                                </div>
                            </div>

                            <div class="row">
                                <?php
                                $delsts = $products[0]['delivery'];
                                $dleysrsg = explode("|", $delsts);
                                // print_r($egyhdjnn);
                                ?>

                                <div class="mb-3 col-md-5 peorycdelivery">
                                    <label>Delivry Content</label>
                                    <?php foreach ($dleysrsg as $key => $value) {?>
                                    <input type='hidden' id='delivry[<?php echo $key ?>]' name='delivry[<?php echo $key ?>]' value='<?php echo $key ?>' />
                                    <input type="hidden" id='deliveryrowno' value='<?php echo $key ?>'>
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Description</label>-->
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="delivery" name="delivery[<?php echo $key ?>]"
                                            value="<?php echo $value ?>" class="form-control mt-2"
                                            placeholder="Delivery Content" required>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <buttom class="btn btn-primary" id="submitddeli" onclick="showAddDelivery()">Add
                                    </buttom>
                                </div>

                                <?php
                                    $warrenuet = $products[0]['warrenty'];
                                    $watentsh = explode("|", $warrenuet);
                                    // print_r($egyhdjnn);
                                    ?>

                                <div class="mb-3 col-md-5 warentid">
                                     <label>Warranty</label>
                                    <?php
                                    foreach ($watentsh as $key => $value) {
                                    ?>
                                    <input type='hidden' id='warrenthdnid[<?php echo $key ?>]' name='warrenthdnid[<?php echo $key ?>]' value='<?php echo $key ?>' />
                                    <input type="hidden" id='warrntrowno' value='<?php echo $key ?>'>
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Feature</label>-->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="warrenty[<?php echo $key ?>]" id="warrenty"
                                            value="<?php echo $value ?>" class="form-control mt-2"
                                            placeholder="Apply Warrenty" required>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <buttom class="btn btn-primary" id="submitwabre" onclick="showValueWarrent()">Add
                                </div>
                            </div>
                            <button class="btn btn-primary" type='submit' name="submit">Submit</button>
                        </form>
                        <h4>Add Variation</h4><button type='button' class='btn btn-sm btn-primary' onclick='newVariation()'>New Variation</button>
                        <hr>
                        <div class='row'>
                            <?php
                                $i=0;
                                foreach ($color as $key => $value) {
                                    $imgColor = $value['color'];
                                    $imgArr = explode(',', $value['images']);
                                    ?>
                            <input type='hidden' id='varID[<?php echo $i ?>]' name='varID[<?php echo $i ?>]'
                                value='<?php echo $value['id'] ?>' />
                            <input type='hidden' id='imgessUrl[<?php echo $i ?>]' name='imgessUrl[<?php echo $i ?>]'
                                value='<?php echo $value['images'] ?>' />
                            <input type='hidden' id='colorName[<?php echo $i ?>]' name='colorName[<?php echo $i ?>]'
                                value='<?php echo $value['colorcode'] ?>' />
                            <div class='col-md-2' style="justify-content: center;display: flex;margin-top: 45px;">
                                <div
                                    style='background-color:<?php echo $imgColor ?>;height:50px;width:50px;border-radius: 50px'>
                                </div>
                                <br>
                                <!--<span><?php echo $value['colorcode'] ?></span>-->
                                <button class='btn btn-sm' type='button'
                                    onclick='editVariation(<?php echo $i ?>)'><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            </div>
                            <?php
                                    $j=0;
                                    foreach ($imgArr as $key => $imgValue) {
                                    ?>
                            <div class='col-md-2'>
                                <input type='hidden' name='singleURl[<?php echo $i.$j ?>]'
                                    id='singleURl[<?php echo $i.$j ?>]' value='<?php echo $imgValue ?>' />
                                <button type='button' class='btn btn-sm btn-primary'
                                    onclick='deleteIndvi(<?php echo $i.",".$j ?>)'><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>

                                <img class='ridge mb-2'
                                    src='<?php echo base_url('assets/images/product/') . $imgValue ?>'
                                    style='width:100%;max-height: 150px;' />
                            </div>
                            <?php
                                        $j++;
                                        }
                                    ?>
                            <hr>
                            <?php
                                $i++;
                                }
                                ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- / Content -->
    <div class="content-backdrop fade"></div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Mdellabel">Edit Variation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action='<?php echo base_url('admin/product/ProductController/updateVariation') ?>' method='post'
                enctype="multipart/form-data">
                <div class="modal-body">
                    <input type='hidden' name='variationID' id='variationID' />
                    <input type='hidden' name='varProID' id='varProID' value='<?php echo $products[0]['id'] ?>' />
                    <input type='hidden' name='redirectUrl' id='redirectUrl'
                        value="<?php echo base_url('admin/product/ProductController/editProduct/') ?><?php echo $products[0]['id'] ?>" />
                    <div class="mb-3 col-md-10">
                        <label class="form-label" for="basic-icon-default-fullname">Color Name</label>
                        <div class="input-group input-group-merge">
                            <input type="text" name="colorname" id='colorname' class="form-control"
                                placeholder="Enter Color name" />
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="basic-icon-default-fullname">Color</label>
                        <div class="input-group input-group-merge">
                            <input type="color" name="colorcode" class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3 col-md-10">
                        <label class="form-label" for="basic-icon-default-fullname">Images</label>
                        <div class="input-group input-group-merge">
                            <input type="file" name="files[]" class="form-control" accept="image/*" multiple />
                        </div>
                    </div>
                    <div class="mb-3 col-md-10">
                        <label class="form-label" for="basic-icon-default-fullname">Images Url <small>(Multiple images
                                for use ,)</small></label>
                        <div class="input-group input-group-merge">
                            <input type="text" name="modelimageUrl" class="form-control" id='modelimageUrl' />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/virtual-select.min.js"></script>
<script type="text/javascript">
  VirtualSelect.init({ 
  ele: '.multipleSelect' 
  });

  VirtualSelect.init({ 
  ele: '.multipleSelects' 
  });
</script>
<script>

function newVariation(){
    // alert();
    $("#Mdellabel").html("Create New Variation");
    $("#variationID").val("");
    $("#modelimageUrl").val("");
    $("#colorname").val("");
    $("#exampleModal").modal('show');
}

function showAddDelivery() {
    let i = $("#deliveryrowno").val();
    i++;
    $(".peorycdelivery").append(`<div class="col-md-12 mt-2" style="margin-left: -15px;">
      <input type='hidden' id='delivry[` + i + `]' name='delivry[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="delivery[` + i + `]" id="delivery[` + i +
        `]" placeholder="Delivery Content" >
                           <span style="color: red"></span>
                        </div>
                        `
    );
    $("#deliveryrowno").val(i);
}

function myFunction() {
   // alert("gyusfgs");
 var price = $("#price").val();
 var qty = $("#qty").val();
    if(price!="" && qty!=""){

        var mutiplevalue = price*qty;
        $("#totalamount").val(mutiplevalue);
    }else{
        $("#totalamount").val(0);
    }
 
}

function deleteThamImg(id){
    
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
                var sigImg = $("#thmSigImg\\[" + id + "\\]").val();
                var thmsImg = $("#thmsImg").val();
                console.log(thmsImg);
                var fullArr = thmsImg.split(",");
                const index = fullArr.indexOf(sigImg);
                if (index > -1) { // only splice array when item is found
                    fullArr.splice(index, 1); // 2nd parameter means remove one item only
                }
    
                //console.log(fullArr);
                var imgUrl = fullArr.toString();
                // console.log(imgUrl);
                $("#thmsImg").val(imgUrl)
                $("#hdnimage").val(imgUrl);
                $("#thamImg\\[" + id + "\\]").remove();
                $("#thmsDelBtn\\[" + id + "\\]").remove()
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

function editVariation(id) {
    // alert(id);
    var varID = $("#varID\\[" + id + "\\]").val();
    var imagesUrl = $("#imgessUrl\\[" + id + "\\]").val();
    var colorName = $("#colorName\\[" + id + "\\]").val();
    // alert(varID);
    $("#variationID").val(varID);
    $("#modelimageUrl").val(imagesUrl);
    $("#colorname").val(colorName);
    $("#Mdellabel").html("Edit Variation");
    $("#exampleModal").modal('show');

}

function deleteIndvi(row, imgArr) {
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
                var imagesUrl = $("#imgessUrl\\[" + row + "\\]").val();
                var image = $("#singleURl\\[" + row + imgArr + "\\]").val();
                //  alert(imagesUrl);
                console.log("click ", image);
                var fullArr = imagesUrl.split(",");
                // alert(fullArr);
                console.log("full image array ", fullArr);
                const index = fullArr.indexOf(image);
                if (index > -1) { // only splice array when item is found
                    fullArr.splice(index, 1); // 2nd parameter means remove one item only
                }
                var varID = $("#varID\\[" + row + "\\]").val();
                console.log(fullArr);
                //return false;
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('admin/variation/Variation/variDeleteInd') ?>",
                    data: {
                        id: varID,
                        fullArr: fullArr
                    },
                }).done(function() {
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

function showValueWarrent() {

    let i = $("#warrntrowno").val();
    i++;
    $(".warentid").append(`<div class="col-md-12 mt-2">
      <input type='hidden' id='warrenthdnid[` + i + `]' name='warrenthdnid[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="warrenty[` + i + `]" id="warrenty[` + i +
        `]" placeholder="Apply Warrenty" >
                           <span style="color: red"></span>
                        </div>
                        `
    );
    $("#warrntrowno").val(i);


}



function showValue() {
    let i = $("#rowno").val();
    i++;
    $(".prigrid").append(`<div class="col-md-12 mt-2">
      <input type='hidden' id='hdn_id[` + i + `]' name='hdn_id[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="featutes[` + i + `]" id="featutes[` + i +
        `]" placeholder="Product Features" >
                           <span style="color: red"></span>
                        </div>
                        `
    );
    $("#rowno").val(i);
}

function showAddvalue() {
    let i = $("#descrowno").val();
    // alert(i);
    i++;
    // alert(i);
    $(".peorycdesc").append(`<div class="col-md-12 mt-2" style="margin-left: -15px;">
      <input type='hidden' id='deschdn_id[` + i + `]' name='deschdn_id[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="description[` + i + `]" id="description[` +
        i +
        `]"  placeholder="Product Description" >
                           <span style="color: red"></span>
                        </div>
                        `
    );
    $("#descrowno").val(i);
}
</script>

<script>
function showSubcatefunction() {
    var category = $("#categoesies").val();
    // alert(category);
    $("#subcategorymy").empty();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/product/ProductController/getSubcategory') ?>",
        data: {
            id: category
        },
        success: function(data) {

            var subcateg = JSON.parse(data);
            console.log(subcateg[0].subcat);

            var test = "";
            for (var i = 0; i < subcateg.length; i++) {

                var subcategory = subcateg[i].subcat;
                $("#subcategorymy").append(
                    `<option value="${subcateg[i].id}">${subcateg[i].subcat}</option>`)
            }

            return false;

        }
    });


}

function showSubcatefunctionmini(){
    var subcategory =  $(".subcategoesies").val();
        $("#subcategorymymini");
             $.ajax({
                 type: "POST",
                 url: "<?php echo base_url('admin/product/ProductController/getSubcategorymini') ?>",
                 data: {  id: subcategory  },
                 success: function(data) {
                     
                    var subcateg = JSON.parse(data);
                    console.log(subcateg[0].subcategorymin);
                    
                    var test = "";
                      for (var i = 0; i < subcateg.length; i++) {
                          
                          var subcategorymini = subcateg[i].subcategorymin;
                          $("#subcategorymymini").append(`<option value="${subcateg[i].id}">${subcateg[i].subcategorymin}</option>`)
                      }
                
                   return false;

                   }
               });
    
    
}
</script>
<script>
function checkvName() {

    // var my_bride_name = $("#productnamess").val();

    // if (my_bride_name != '') {
    //     /* if (!my_bride_name.match(/^[^\s]+[a-zA-Z\s]+([a-zA-Z]+)*$/)) { */
    //     if (!my_bride_name.match(/^[a-zA-Z\s]*$/)) {
    //         document.getElementById('vname_message').style.color = 'red';
    //         document.getElementById('vname_message').innerHTML = 'Special Character not allowed';
    //         document.getElementById('productnamess').style.border = '1px solid red';
    //         $('#productnamess').val('');
    //         return false;
    //     } else if (my_bride_name.length < 2 || my_bride_name.length > 30) {
    //         document.getElementById('vname_message').style.color = 'red';
    //         document.getElementById('vname_message').innerHTML = 'Name must be between 2 to 30 characters';
    //         document.getElementById('productnamess').style.border = '1px solid red';
    //         $('#productnamess').val('');
    //         return false;
    //     } else {
    //         document.getElementById('vname_message').innerHTML = '';
    //         document.getElementById('productnamess').style.border = '1px solid green';
    //         return true;
    //     }
    // }
}
</script>
<?php $this->load->view('admin/includes/footer');?>