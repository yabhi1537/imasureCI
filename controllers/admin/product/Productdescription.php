<?php 
class Productdescription extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('admin/product/Productfeatresmodel');
    }


    public function index(){
        $data['description'] = $this->Productfeatresmodel->getProductiondescription();
        $this->load->view('admin/product/description',$data);

    }


    public function addDescription(){
        $data['features'] = $this->Productfeatresmodel->getProductname();

        if(isset($_POST['submit'])){

            $prodctss  = $this->input->post('prodctss');
            $hdn_id  = $this->input->post('hdn_id');
     
            foreach ($hdn_id as $key => $value) {

                $description = $this->input->post('description')[$key];
                
                $formArray['productid'] = $prodctss;
                $formArray['productdesc'] = $description;
                $this->db->insert('product_description',$formArray);
            }
            redirect('admin/product/Productdescription/addDescription');

        }

        $this->load->view('admin/product/adddescription',$data);

    }

    public function Deletefeats(){

       $id =  $this->uri->segment(5);
        
       $this->db->where('id',$id);
       $this->db->delete('product_description');
       $this->session->set_flashdata('success','Product Deleted Successfully');
       redirect('admin/product/Productdescription/');

    }
    
}




?>