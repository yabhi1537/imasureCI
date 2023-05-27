<?php $this->load->view('admin/includes/header');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/virtual-select.min.css"> 
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
                                        <input type="text" id="titelid" class="form-control"
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
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Quantity</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="quantitty"
                                            placeholder="Quantity" aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2" onkeyup="myFunction()" required name="qty" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Price</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="price"
                                        placeholder="Price" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" onkeyup="myFunction()" required name="price" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Discount in Rs..</label>
                                    <div class="input-group input-group-merge">
                                        <input type="number" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Discount in Rs...." aria-label="John Doe"
                                            aria-describedby="basic-icon-default-fullname2"  name="discount" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Category</label>
                                    <div class="input-group input-group-merge hidden-data-get">
                                        <select required name="category" id="categoesies" multiple  data-search="true" data-silent-initial-value-set="true" class=" multipleSelect" onchange="showSubcatefunction()">
                                            <option value="">Select Category</option>
                                            <?php 
                                                foreach($category as $categories){
                                            ?>
                                            
                                            <option value="<?php echo $categories['catname'] ?>" ><?php echo $categories['catname'] ?></option>
                                         
                                            <?php } ?>
                                             <option value="ass">Accessories</option> 

                                        </select>
                                    </div>
                                </div>
                   
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category</label>
                                    <div class="input-group input-group-merge">
                                       <select name="subcategory" id='subcategorymy' class="form-control subcategoesies" onchange="showSubcatefunctionmini()" >
                                           <option value="">Select Subcategory</option>
                                           <?php  foreach($subcategory as $subcate){   ?>
                                           <option value="<?php echo $subcate['id'] ?>"><?php echo $subcate['subcat'] ?></option>
                                           <?php } ?>
                                       </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Sub-Category-Mini</label>
                                    <div class="input-group input-group-merge">
                                       <select name="subcategorymin" id='subcategorymymini' multiple data-search="true" data-silent-initial-value-set="true" class="multipleSelects" >
                                           <option value="">Select Subcategory Mini</option>
                                           <?php  foreach($subcategorymini as $subcatemin){   ?>
                                           <option value="<?php echo $subcatemin['id'] ?>"><?php echo $subcatemin['subcategorymin'] ?></option>
                                           <?php } ?>
                                       </select>
                                    </div>
                                </div>
                             
                                
                                 <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Item Type</label>
                                    <div class="input-group input-group-merge">
                                         <input type="radio"  value="1" checked name="itemType" required />&nbsp;Product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="radio" value="0" name="itemType" required />&nbsp;Accessories
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--<div class="mb-3 col-md-6">-->
                                <!--    <label class="form-label" for="basic-icon-default-fullname">Total Amount</label>-->
                                <!--    <div class="input-group input-group-merge">-->
                                <!--        <input type="text"  id="totalamount" class="form-control" readonly>-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="basic-icon-default-fullname">Product image</label>
                                    <div class="input-group input-group-merge">
                                        <input type="file"  name="files[]" accept='image/*' class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Sale Message</label>
                                    <div class="input-group input-group-merge">
                                         <input type="radio"  value="1" name="sale" required />&nbsp;Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="radio" value="0" name="sale" required />&nbsp;No
                                    </div>
                                </div>
                                
                                <input type="hidden" id='courtsr' value='0'>
                             <div class="mb-3 col-md-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Color</label>
                                    </br>
                                    <input type='hidden' id='colrosgs[0]' name='colrosgs[0]' value='0' />
                                    <input type='color' name='colorcode[0]' id='colorcode[0]'/>
                            </div>
                            </div>
                                
                            <div class="row">
                  
                                <div class="mb-3 col-md-5 peorycdesc mt-2">
                                    <label class="form-label" for="basic-icon-default-fullname">Description 1</label>
                                        <input type='hidden' id='deschdn_id[0]' name='deschdn_id[0]' value='0' />
                                        <input type="hidden" id='descrowno' value='0'>
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Description</label>-->
                                    <!-- <div class="hidden-data-get">
                                        <select  name="categs" id="descateg"  data-search="true" data-silent-initial-value-set="true" >
                                            <option value="">Select Category</option>
                                            <?php 
                                                foreach($category as $categories){
                                            ?>
                                            <option value="<?php echo $categories['catname'] ?>"><?php echo $categories['catname'] ?></option>
                                            <?php } ?>
                                             <option value="ass">Accessories</option> 

                                        </select>
                                        </div> -->
                                    <div class="input-group input-group-merge">
                                        
                                    <textarea    id="description" name="description[0]" class="form-control" placeholder="Product Description" required></textarea>
                                    </div>
                                </div>
                                
                                <div class="mb-3 col-md-1 mt-2">
                            
                                    <buttom class="btn btn-primary" id="submitfeature" onclick="showAddvalue()">Add</buttom>
                                </div>
                                
                                 <div class="mb-3 col-md-5 prigrid mt-2">
                                       <input type='hidden' id='hdn_id[0]' name='hdn_id[0]' value='0' />
                                        <input type="hidden" id='rowno' value='0'>
                                    <label class="form-label" for="basic-icon-default-fullname">Product Feature 1</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text"  name="featutes[0]" id="featutes"  class="form-control" placeholder="Product Feature"  required>
                                    </div>
                                </div>
                                  <div class="mb-3 col-md-1">
                                    
                                        <buttom class="btn btn-primary"  id="submit" onclick="showValue()">Add 
                                 </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-5 peorycdelivery">
                                    <label class="form-label" for="basic-icon-default-fullname">Delivry 1</label>
                                        <input type='hidden' id='delivry[0]' name='delivry[0]' value='0' />
                                        <input type="hidden" id='deliveryrowno' value='0'>
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Description</label>-->
                                    <div class="input-group input-group-merge">
                                        <input type="text"  id="delivery" name="delivery[0]" class="form-control" placeholder="Delivery Content"  required>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <buttom class="btn btn-primary" id="submitddeli" onclick="showAddDelivery()">Add</buttom>
                                </div>
                                
                                 <div class="mb-3 col-md-5 warentid">
                                     <label class="form-label" for="basic-icon-default-fullname">Warrenty 1</label>
                                       <input type='hidden' id='warrenthdnid[0]' name='warrenthdnid[0]' value='0' />
                                        <input type="hidden" id='warrntrowno' value='0'>
                                    <!--<label class="form-label" for="basic-icon-default-fullname">Product Feature</label>-->
                                    <div class="input-group input-group-merge">
                                        <input type="text"  name="warrenty[0]" id="warrenty"  class="form-control" placeholder="Apply Warrenty" required>
                                    </div>
                                </div>
                                  <div class="mb-3 col-md-1">
                                        <buttom class="btn btn-primary"  id="submitwabre" onclick="showValueWarrent()">Add 
                                 </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-12 mt-5'>
                                    <h4>Add Variation 
                                    <!--<button class='btn btn-sm btn-primary' type='button' onclick='addMoreVariation()'>Add More</button>-->
                                    </h4>
                                    <table class='table'>
                                        <thead>
                                            <tr>
                                                <th>Color</th>
                                                <th>Color Name</th>
                                                <th>Image</th>
                                                <th>Image Url</th>
                                                <!--<th>Action</th>-->
                                            </tr>
                                        </thead>
                                        <tbody id='variationBody'>
                                            <tr>
                                                <td>
                                                    <input type='color' name='color[0]' id='color[0]' class='form-control'/>
                                                </td>
                                                <td>
                                                    <input type='text' name='colorName[0]' id='colorName[0]' class='form-control'/>
                                                </td>
                                                <td>
                                                    <input type='file' name='imageFile[]' accept='image/*' multiple id='imageFile[0]' class='form-control'/>
                                                </td>
                                                <td>
                                                    <input type='text' name='imageUrl[0]' id='imageUrl[0]' class='form-control'/>
                                                </td>
                                                <!--<td>-->
                                                <!--    <button type='button' class='btn btn-sm btn-danger'><i class="fa fa-trash" aria-hidden="true"></i></button>-->
                                                <!--</td>-->
                                            </tr>
                                        </tbody>
                                    </table>
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

<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/virtual-select.min.js"></script>
<script type="text/javascript">
  VirtualSelect.init({ 
  ele: '.multipleSelect' 
  });

  VirtualSelect.init({ 
  ele: '.multipleSelects' 
  });
</script>
<script type="text/javascript">

$('.hidden-data-get').click(function(){
    var catnames = $('#categoesies').val();
    var descat = $("#description").val("Shop for ✓100% Pure & Organic " + catnames +" Products from our great selection at OrganiCart.co.in. Order now to get your health basket at home delivered. ✓Go cashless by paying online. ✓Cash on delivery is also available.");
    var titelval = $('#titelid').val(" Buy Organic " + catnames +" Products Online at Best Prices in India - OrganiCart.co.in");
                //alert(catnames);
                //var catnam = $(this).attr('catnam');
            });
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
    <label class="form-label" for="basic-icon-default-fullname">Delivery ${l}</label>
      <input type='hidden' id='delivry[` + i + `]' name='delivry[` + i + `]' value='` + i + `'/>
                           <input type="text" class="form-control" name="delivery[` + i + `]" id="delivery[` + i +
        `]" placeholder="Delivery Content" >
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
    <label class="form-label" for="basic-icon-default-fullname">Warrenty ${l}</label>
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