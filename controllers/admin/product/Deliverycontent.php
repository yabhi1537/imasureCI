<?php

class Deliverycontent extends CI_Controller
{
    function  __construct()
    {
        parent:: __construct();
        $this->load->model('admin/product/Productfeatresmodel');
    }

    public function index(){
        $data['delivery'] = $this->Productfeatresmodel->getDelivery();
        $this->load->view('admin/product/delivery',$data);

    }

    public function addeliery(){
        $data['features'] = $this->Productfeatresmodel->getProductname();
        if(isset($_POST['submit'])){

            $prodctss  = $this->input->post('prodctss');
            $hdn_id  = $this->input->post('hdn_id');
          
            foreach ($hdn_id as $key => $value) {

                $delivery = $this->input->post('delivery')[$key];
                
                $formArray['productid'] = $prodctss;
                $formArray['delierydetails'] = $delivery;
                $this->db->insert('delivery',$formArray);
            }
            redirect('admin/product/Deliverycontent/addeliery');

        }
        $this->load->view('admin/product/adddelivery',$data);
        
    }

    public function Deletefeats(){

        $featureid =   $this->uri->segment(5);

        $this->db->where('id',$featureid);
        $this->db->delete('delivery');
        $this->session->set_flashdata('success','Deleted Succesfully');
        redirect('admin/product/Deliverycontent/');

    }
    
}



?>