<?php

        $this->load->view('includes/header');

?>
<style>
.address {
    width: 186px;
    height: 45px;
    color: white;
    background: black;
    margin-left: 553px;
    /* margin: 63px; */
    margin-top: 31px;
    border-radius: 12px;
}
</style>

<main class="main-wrapper">





    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="text-center">
                <h2 class="text-center m-0">Addresses</h2>
                <a href="<?php echo base_url('Myaccount') ?>" class="m-0 text-center">Return to account detail</a><br>
                <div class="col-md-2">
                    <button class='address' onclick="myFunction()">Add a new address</button>
                </div>
            </div>



            <div class="col-md-4 justify-content-center" id="formid" style="margin-left: 422px;">
                <form id="formsubmit" >

                    <h3>Add a new address</h3>
                    <div class="row">
                        <div class=" col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email">

                        </div>
                        <div class=" col-md-6 form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class=" col-md-12 form-group">
                        <input type="text" class="form-control" name="comppany" id="comppany" aria-describedby="emailHelp"
                            placeholder="Company">

                    </div>
                    <div class=" col-md-12 form-group">
                        <input type="text" class="form-control" name="address1" id="address1" aria-describedby="emailHelp"
                            placeholder="Address 1">

                    </div>
                    <div class=" col-md-12 form-group">
                        <input type="text" class="form-control" name="address2" id="address2" aria-describedby="emailHelp"
                            placeholder="Address 2">

                    </div>
                    <div class=" col-md-12 form-group">
                        <input type="text" class="form-control" name="city" id="city" aria-describedby="emailHelp"
                            placeholder="City">

                    </div>
                    <div class=" col-md-12 form-group">
                        <select  name="country" id="country" class="form-control">
                            <option value="India">India</option>
                        </select>

                    </div>
                    <div class=" col-md-12 form-group">
                        <input type="text" class="form-control" name="postal" id="postal" aria-describedby="emailHelp"
                            placeholder="Postal/Zip Code">

                    </div>
                    <div class=" col-md-12 form-group">
                        <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp"
                            placeholder="Phone">

                    </div>

                    <button type="submit" name="sunit" id="sunit" onclick="saveFunction()"
                        class="btn btn-primary col-md-3">Submit</button>
                </form>
            </div>
        </div>
    </div>


</main>

<script>
$("#formid").hide();

function myFunction() {
    $("#formid").show();
}

function saveFunction() {
    var email = $("#email").val();
    var password = $("#password").val();
    var comppany = $("#comppany").val();
    var address1 = $("#address1").val();
    var address2 = $("#address2").val();
    var city = $("#city").val();
    var country = $("#country").val();
    var postal = $("#postal").val();
    var phone = $("#phone").val();
    $('#formsubmit').submit();
    $.ajax({
        type: 'POST',
        data: {email:email,password:password,comppany:comppany,address1:address1,address2:address2,city:city,country:country,postal:postal,phone:phone},
        url: '<?php echo base_url('Myaccount/saveAddress') ?>',
        success: function(data) {
           
        }
    });



}
</script>

<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>