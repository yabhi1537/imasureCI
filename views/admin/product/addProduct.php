<?php $this->load->view('admin/includes/header');?>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold"><span class="text-muted fw-light">Product/</span> Add product</h4>
                        <!-- <h5 class="mb-0">Basic with Icons</h5> -->
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
                        <form method="post" action="<?php echo base_url('admin/product/ProductController/addProduct') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Title</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control"
                                            placeholder="Product Title" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required name="producttitle" id="producttitle" />
                                    </div>
                                    <label id='vname_message'></label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control"
                                            placeholder="Product Name" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" required name="productname" id="productnamess" onChange="return checkvName()" />
                                    </div>
                                    <label id='vname_message'></label>
                                </div>
                            </div>
                            <div class="row">
                                
                                <!--<div class="mb-3 col-md-3">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Price</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="number" class="form-control" id="price"-->
                                <!--        placeholder="Price" aria-label="John Doe"-->
                                <!--        aria-describedby="basic-icon-default-fullname2" onkeyup="myFunction()" required name="price" />-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="mb-3 col-md-3">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Discount in Rs..</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="number" class="form-control" id="basic-icon-default-fullname"-->
                                <!--            placeholder="Discount in Rs...." aria-label="John Doe"-->
                                <!--            aria-describedby="basic-icon-default-fullname2"  name="discount" />-->
                                <!--    </div>-->
                                <!--</div>-->
                                      <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product image</label>
                                    <div class="input-group input-group-merge">
                                        <input type="file"  name="files[]" accept='image/*' class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Model No </label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="quantitty"
                                            placeholder="Model No " aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2"  name="modelNo" />
                                    </div>
                                </div>
                                 <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Part Code </label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="quantitty"
                                            placeholder="Part Code" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2"  name="partCode" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-12 peorycdesc mt-2">
                                     <label class="form-label" for="basic-icon-default-fullname">Overview</label>
                                    <textarea name="overview" id="overview" rows="4"  class='form-control'></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge">
                                        <select required name="category" id="categoesies" class="form-control" onchange="showSubcatefunction()">
                                            <option value="">Select Category</option>
                                            <?php 
                                                foreach($category as $categories){
                                            ?>
                                            <option value="<?php echo $categories['id'] ?>"><?php echo $categories['catname'] ?></option>
                                            <?php } ?>
                                             <option value="ass">Accessories</option> 

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category</label>
                                    <div class="input-group input-group-merge">
                                       <select name="subcategory" id='subcategorymy' class="form-control" required onclick='getChildSubCategory()'>
                                           <option value="">Select Subcategory</option>
                                           <!--<?php  foreach($subcategory as $subcate){   ?>-->
                                           <!--<option value="<?php echo $subcate['id'] ?>"><?php echo $subcate['subcat'] ?></option>-->
                                           <!--<?php } ?>-->
                                       </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Child-Sub-Category</label>
                                    <div class="input-group input-group-merge">
                                       <select name="childSubCatId" id='childSubCatId' class="form-control">
                                           <option value="">Select Child Subcategory</option>
                                           
                                       </select>
                                    </div>
                                </div>
                                <!--<div class="mb-3 col-md-3">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Product image</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="file"  name="files[]" accept='image/*' class="form-control" multiple>-->
                                <!--    </div>-->
                                <!--</div>-->
                                 <input type="hidden" id='courtsr' value='0'>
                            <!-- <div class="mb-3 col-md-3">-->
                            <!--        <label class="form-label" for="basic-icon-default-fullname">Color</label>-->
                            <!--        </br>-->
                            <!--        <input type='hidden' id='colrosgs[0]' name='colrosgs[0]' value='0' />-->
                            <!--        <input type='color' name='colorcode[0]' id='colorcode[0]'/>-->
                            <!--</div>-->
                                <!-- <div class="mb-3 col-md-3">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Item Type</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--         <input type="radio"  value="1" checked name="itemType" required />&nbsp;Product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                                <!--         <input type="radio" value="0" name="itemType" required />&nbsp;Accessories-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                            <div class="row">
                                <!--<div class="mb-3 col-md-6">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Total Amount</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="text"  id="totalamount" class="form-control" readonly>-->
                                <!--    </div>-->
                                <!--</div>-->

                                
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Sale Message</label>
                                    <div class="input-group input-group-merge">
                                         <input type="radio"  value="1" name="sale" required />&nbsp;Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="radio" value="0" name="sale" required />&nbsp;No
                                    </div>
                                </div>
                                
                               
                            </div>
                            
                            
                            
                            
                            <div class="row">
                                <!--<div class="mb-3 col-md-5 peorycdelivery">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Technical Specifications 1</label>-->
                                <!--        <input type='hidden' id='delivry[0]' name='delivry[0]' value='0' />-->
                                <!--        <input type="hidden" id='deliveryrowno' value='0'>-->
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Description</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="text"  id="delivery" name="delivery[0]" class="form-control" placeholder="Technical Specifications"  required>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="mb-3 col-md-1">-->
                                <!--    <buttom class="btn btn-primary" id="submitddeli" onclick="showAddDelivery()">Add</buttom>-->
                                <!--</div>-->
                                
                                <!-- <div class="mb-3 col-md-5 warentid">-->
                                <!--     <label class="form-label" for="basic-icon-default-fullname">General Specifications 1</label>-->
                                <!--       <input type='hidden' id='warrenthdnid[0]' name='warrenthdnid[0]' value='0' />-->
                                <!--        <input type="hidden" id='warrntrowno' value='0'>-->
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Feature</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="text"  name="warrenty[0]" id="warrenty"  class="form-control" placeholder="General Specifications" required>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--  <div class="mb-3 col-md-1">-->
                                <!--        <buttom class="btn btn-primary"  id="submitwabre" onclick="showValueWarrent()">Add -->
                                <!-- </div>-->
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product overview</label>
                                    <textarea name="Product_overview" id="Product_overview" rows="10"  class='form-control'></textarea>
                                </div>
                           
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Specifications</label>
                                    <textarea name="Specifications" id="Specifications" rows="10"  class='form-control'></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Models</label>
                                    <textarea name="Models" id="Models" rows="4"  class='form-control'></textarea>
                                </div>
                            
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Resources</label>
                                    <textarea name="editor1" id="editor" rows="4"  class='form-control'></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="basic-icon-default-fullname">Accessories</label>
                                    <textarea name="Accessories" id="Accessories" rows="4"  class='form-control'></textarea>
                                </div>
                            </div>
                            
                            
                           
                          
                                
                            <button class="btn btn-primary mt-5" name="submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>

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
                
<script type="text/javascript">

function showVariationModel(){
    $("#exampleModal").modal('show');
}

function addMoreVariation(){
    var rowCount = $('#myTable tr').length;
    let i = rowCount+1;
    $("#variationBody").append(`
        <tr>
            <td>
                <input type='color' name='color[${i}]' id='color[${i}]' class='form-control'/>
            </td>
            <td>
                <input type='text' name='colorName[${i}]' id='colorName[${i}]' class='form-control'/>
            </td>
            <td>
                <input type='file' accept='image/*' multiple name='imageFile[]' id='imageFile[${i}]' class='form-control'/>
            </td>
            <td>
                <input type='text' name='imageUrl[${i}]' id='imageUrl[${i}]' class='form-control'/>
            </td>
            <td>
                <button type='button' class='btn btn-sm btn-danger'><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
        </tr>
    `)
}


function addColross(){
    
        let i = $("#courtsr").val();
    i++;
    $(".addcousrs").append(`<div class="col-md-3 mt-2 mb-2">
      <input type='hidden' id='colrosgs[` + i + `]' name='colrosgs[` + i + `]' value='` + i + `'/>
                             <input type='color'  name='colorcode[` + i + `]' id='colorcode[` + i + `]'/>
                        </div>
                        <div class="col-md-3 mt-2">
                           <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" multiple name="images[` + i + `]" id="images[` +
        i + `]" placeholder="Enter no off tabs" >
                          
                        </div>`
    );
    $("#courtsr").val(i);
    
}



function showAddDelivery() {
    let i = $("#deliveryrowno").val();
    i++;
    var l = i+1;
    $(".peorycdelivery").append(`<div class="col-md-12 mt-2 p-0">
    <label class="form-label" for="basic-icon-default-fullname">TECHNICAL SPECIFICATIONS ${l}</label>
      <input type='hidden' id='delivry[` + i + `]' name='delivry[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="delivery[` + i + `]" id="delivery[` + i +
        `]" placeholder="TECHNICAL SPECIFICATIONS" >
                           <span style="color: red"></span>
                        </div>
                        `
    );
    $("#deliveryrowno").val(i);
}

function showValueWarrent() {
    let i = $("#warrntrowno").val();
    i++;
    var l = i+1;
    $(".warentid").append(`<div class="col-md-12 mt-2 p-0">
    <label class="form-label" for="basic-icon-default-fullname">GENERAL SPECIFICATIONS ${l}</label>
      <input type='hidden' id='warrenthdnid[` + i + `]' name='warrenthdnid[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="warrenty[` + i + `]" id="warrenty[` + i +
        `]" placeholder="GENERAL SPECIFICATIONS" >
                           <span style="color: red"></span>
                        </div>`
    );
    $("#warrntrowno").val(i);
}



function showValue() {
    let i = $("#rowno").val();
    i++;
     var l = i+1;
    $(".prigrid").append(`<div class="col-md-12 mt-2 p-0">
    <label class="form-label" for="basic-icon-default-fullname">Product Feature ${l}</label>
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
    // alert();
    let i = $("#descrowno").val();
    i++;
    var j = i+1;
    $(".peorycdesc").append(`<div class="col-md-12 mt-2 p-0">
    <label class="form-label" for="basic-icon-default-fullname">Description ${j}</label>
      <input type='hidden' id='deschdn_id[` + i + `]' name='deschdn_id[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="description[` + i + `]" id="description[` + i +
        `]"  placeholder="Product Description" >
                           <span style="color: red"></span>
                        </div>
                        `
    );
    $("#descrowno").val(i);
}

</script>

<script>
    function showSubcatefunction(){
    var category =  $("#categoesies").val();
        $("#subcategorymy").empty();
             $.ajax({
                 type: "POST",
                 url: "<?php echo base_url('admin/product/ProductController/getSubcategory') ?>",
                 data: {  id: category  },
                 success: function(data) {
                     
                    var subcateg = JSON.parse(data);
                    console.log(subcateg[0].subcat);
                    
                    var test = "";
                      for (var i = 0; i < subcateg.length; i++) {
                          
                          var subcategory = subcateg[i].subcat;
                          $("#subcategorymy").append(`<option value="${subcateg[i].id}">${subcateg[i].subcat}</option>`)
                      }
                
                   return false;

                   }
               });
    
    
}
</script>
<script>



  function checkvName() {
      
var my_bride_name = $("#productnamess").val();

if (my_bride_name != '') {
    /* if (!my_bride_name.match(/^[^\s]+[a-zA-Z\s]+([a-zA-Z]+)*$/)) { */
    // if (!my_bride_name.match(/^[a-zA-Z\s]*$/)) {
    //     document.getElementById('vname_message').style.color = 'red';
    //     document.getElementById('vname_message').innerHTML = 'Special Character not allowed';
    //     document.getElementById('productnamess').style.border = '1px solid red';
    //     $('#productnamess').val('');
    //     return false;
    // } 
}
}
    
    
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

function myFunction() {
 var price = $("#price").val();
 var qty = $("#quantitty").val();
    if(price!="" && qty!=""){

        var mutiplevalue = price*qty;
        $("#totalamount").val(mutiplevalue);
    }else{
        $("#totalamount").val(0);
    }
 
}



</script>
<?php $this->load->view('admin/includes/footer');?>