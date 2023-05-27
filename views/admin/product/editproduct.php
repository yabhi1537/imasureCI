<style>
.ridge {
    border-style: ridge;
}
</style>
<?php $this->load->view('admin/includes/header');?>
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
                        <a href='<?php echo base_url("product/".$prnameurl) ?>' target='_blanck'><button class='btn btn-sm btn-primary' style="float: right;margin-top: -40px;" >View Product</button></a>
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
                                            aria-describedby="basic-icon-default-fullname2"  required
                                            value="<?php echo $products[0]['pname'] ?>" name="productname"
                                            id="productnamess" onChange="return checkvName()" />
                                    </div>
                                    <label id='vname_message'></label>
                                </div>
                            <div class="row">
                                <!--<div class="mb-3 col-md-3">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Quantity</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="number" class="form-control" id="qty"-->
                                <!--            placeholder="John Doe" aria-label="John Doe"-->
                                <!--            aria-describedby="basic-icon-default-fullname2" required-->
                                <!--            value="<?php echo $products[0]['qty'] ?>" name="qty" onkeyup="myFunction()" />-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="mb-3 col-md-3">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Price</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="number" class="form-control" id="price"-->
                                <!--            aria-describedby="basic-icon-default-fullname2" required-->
                                <!--            value="<?php echo $products[0]['price'] ?>" name="price" onkeyup="myFunction()"/>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="mb-3 col-md-3">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Discount in Rs..</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="number" class="form-control" id="basic-icon-default-fullname"-->
                                <!--            placeholder="John Doe" aria-label="John Doe"-->
                                <!--            aria-describedby="basic-icon-default-fullname2"-->
                                <!--            value="<?php echo $products[0]['discount'] ?>" name="discount" />-->
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
                                    <label class="form-label" for="basic-icon-default-fullname">Model No </label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="quantitty"
                                            placeholder="Model No " aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" value='<?php echo $products[0]['model_no'] ?>'  name="modelNo" />
                                    </div>
                                </div>
                                 <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Part Code </label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="quantitty"
                                            placeholder="Part Code" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" value='<?php echo $products[0]['part_code'] ?>' name="partCode" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-12 peorycdesc mt-2">
                                     <label class="form-label" for="basic-icon-default-fullname">Overview</label>
                                    <textarea name="overview" id="overview" rows="4" class='form-control'><?php echo $products[0]['overview'] ?></textarea>
                                </div>
                            </div>
                            <!--</div>-->

                            <!--<div class="row">-->
                            <!--<div class="mb-3 col-md-6">-->
                            <!--        <label class="form-label" for="basic-icon-default-fullname">Product images</label>-->
                            <!--        <div class="input-group input-group-merge">-->
                            <!--            <input type="file" name="files[]" class="form-control" accept='image/*'-->
                            <!--                multiple>-->
                            <!--            <input type="hidden" name="hdnimage" id='hdnimage'-->
                            <!--                value="<?php echo $products[0]['image'] ?>">-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge">
                                        <select required name="category" id="categoesies" class="form-control"
                                            onchange="showSubcatefunction()">
                                            <!--<option value="<?php echo $products[0]['category'] ?>">-->
                                            <!--    <?php echo $products[0]['category'] ?></option>-->
                                            <?php
                                            foreach ($category as $categories) {
                                                
                                            ?>
                                            
                                            <option <?php echo ($categories['id'] == $products[0]['category'])?"selected='selected'":""  ?>  value="<?php echo $categories['id'] ?>">
                                                <?php echo $categories['catname'] ?></option>
                                            <?php }?>
                                            <!-- <option value="2">2</option> -->

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category</label>
                                    <div class="input-group input-group-merge">
                                        <select name="subcate" id='subcategorymy' class="form-control" required onclick='getChildSubCategory()'>
                                            <option value="<?php echo $products[0]['sub_category'] ?>">
                                                <?php echo $products[0]['sub_category'] ?></option>
                                            <?php foreach ($subcategory as $subcat) {?>
                                            <option <?php echo ($subcat['id'] == $products[0]['sub_category'])?"selected='selected'":""  ?> value="<?php echo $subcat['id'] ?>"><?php echo $subcat['subcat'] ?>
                                            </option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Child-Sub-Category</label>
                                    <div class="input-group input-group-merge">
                                         <select name="childSubCatId" id='childSubCatId' class="form-control">
                                            
                                            <?php foreach ($childsubcategory as $subcat) {?>
                                            <option <?php echo ($subcat['id'] == $products[0]['child_sub_cat_id'])?"selected='selected'":""  ?> value="<?php echo $subcat['id'] ?>"><?php echo $subcat['category_name'] ?>
                                            </option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <!--<div class="row">-->
                                
                            <!--</div>-->
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
                                    <img src="<?php echo base_url('assets/images/products/') . $ImagesVal ?>" id='thamImg[<?php echo $key ?>]' alt=""
                                        height="80" width="80" >
                                    
                                    <?php
                                }
                                
                                ?>
                                        
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Sale Message</label>
                                    <div class="input-group input-group-merge">
                                       
                                        <input type="radio" value="1" name="sale" <?php echo ($products[0]['sales'] == "1")? "checked":"" ?>  required />&nbsp;Yes
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" value="0" name="sale" <?php echo ($products[0]['sales'] == "0")? "checked":"" ?> required />&nbsp;No
                                        
                                    </div>
                                </div>
                            <!--     <div class='col-md-3'>-->
                            <!--        <input type='color' name='color' value='red' />-->
                            <!--    </div>-->
                            <!--</div>-->
                           

                           
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Product overview</label>
                                    <textarea name="Product_overview" id="Product_overview" rows="10"  class='form-control'><?php echo $products[0]['product_overview']   ?></textarea>
                                </div>
                           
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Specifications</label>
                                    <textarea name="Specifications" id="Specifications" rows="10"  class='form-control'><?php echo $products[0]['specifications']   ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Models</label>
                                    <textarea name="Models" id="Models" rows="4"  class='form-control'><?php echo $products[0]['models']   ?></textarea>
                                </div>
                            
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Resources</label>
                                    <textarea name="editor1" id="editor" rows="4"  class='form-control'><?php echo $products[0]['resources']   ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Accessories</label>
                                    <textarea name="Accessories" id="Accessories" rows="4"  class='form-control'><?php echo $products[0]['accessories']   ?></textarea>
                                </div>
                            </div>
                           
                           
                            <button class="btn btn-primary" type='submit' name="submit">Submit</button>
                        </form>
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
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
 <script>
                        ClassicEditor
                                .create( document.querySelector( '#Product_overview' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                
                                ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                
                                ClassicEditor
                                .create( document.querySelector( '#Specifications' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                
                                ClassicEditor
                                .create( document.querySelector( '#Models' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                
                                ClassicEditor
                                .create( document.querySelector( '#Accessories' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                
                                
                                
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
</script>
<script>
function getChildSubCategory(){
    var category =  $("#subcategorymy").val();
    $("#childSubCatId").empty();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/product/ProductController/getChildSubcategory') ?>",
        data: {  id: category  },
        success: function(data) {
            var subcateg = JSON.parse(data);
            console.log(subcateg[0].subcat);
            var test = "";
            for (var i = 0; i < subcateg.length; i++) {
                var subcategory = subcateg[i].subcat;
                $("#childSubCatId").append(`<option value="${subcateg[i].id}">${subcateg[i].category_name}</option>`)
            }
            return false;
        }
    });
}
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