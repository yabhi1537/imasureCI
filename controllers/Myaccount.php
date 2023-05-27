<?php 
class Myaccount extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Homemodel');
    }

    public function index(){
        $userid = $this->session->userdata('id');
        $data['account'] = $this->Homemodel->getUseraccount($userid);
        $this->load->view('account',$data);
    }

public function address(){

        $userid = $this->session->userdata('id');

        $this->load->view('address');

    }

    public function saveAddress(){

       $userid = $this->session->userdata('id');
       $email  = $this->input->post('email');
       $password  = $this->input->post('password');
       $comppany  = $this->input->post('comppany');
       $address1  = $this->input->post('address1');
       $address2  = $this->input->post('address2');
       $city  = $this->input->post('city');
       $country  = $this->input->post('country');
       $postal  = $this->input->post('postal');
       $phone  = $this->input->post('phone');

       $formArray['email'] = $email;
       $formArray['password'] = $password;
       $formArray['comppany'] = $comppany;
       $formArray['address1'] = $address1;
       $formArray['address2'] = $address2;
       $formArray['city'] = $city;
       $formArray['country'] = $country;
       $formArray['postal'] = $postal;
       $formArray['phone'] = $phone;
    //    $formArray['email'] = $email;
       $formArray['userid'] = $userid;


        $this->db->insert('address',$formArray);

       
       

    }


    
}



?>