<?php
class TermsControlller extends CI_Controller{

    function index(){
        $product_id = $this->uri->segment(2);
        $this->load->view('includes/header');
        $this->load->view('Service');
        $this->load->view('includes/footer');
    }
    
     function ShippingPolicy(){
        $product_id = $this->uri->segment(2);
        $this->load->view('includes/header');
        $this->load->view('ShippingPolicy');
        $this->load->view('includes/footer');
    }
    
     function RefundPolicy(){
        $product_id = $this->uri->segment(2);
        $this->load->view('includes/header');
        $this->load->view('RefundPolicy');
        $this->load->view('includes/footer');
    }
    
     function PrivacyPolicy(){
        $product_id = $this->uri->segment(2);
        $this->load->view('includes/header');
        $this->load->view('PrivacyPolicy');
        $this->load->view('includes/footer');
    }
}
?>