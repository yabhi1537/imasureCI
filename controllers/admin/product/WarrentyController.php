<?php 

class WarrentyController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('admin/product/Productfeatresmodel');
    }

    public function index(){

        $data['warrenty'] = $this->Productfeatresmodel->getWarrenty();

        $this->load->view('admin/product/warrenty',$data);

    }

    public function addwarrenty(){
        $data['features'] = $this->Productfeatresmodel->getProductname();
                if(isset($_POST['submit'])){

            $prodctss  = $this->input->post('prodctss');
            $hdn_id  = $this->input->post('hdn_id');
     
            foreach ($hdn_id as $key => $value) {

                $warrenty = $this->input->post('warrenty')[$key];
                
                $formArray['productid'] = $prodctss;
                $formArray['warrenty'] = $warrenty;
                $this->db->insert('warrenty',$formArray);
            }
            redirect('admin/product/WarrentyController/addwarrenty');

        }



        $this->load->view('admin/product/addwarrenty',$data);

    }

    public function Deletefeats(){

        $id = $this->uri->segment(5);

        $this->db->where('id',$id);
        $this->db->delete('warrenty');
        $this->session->set_flashdata('success','Deleted Succesfully');
        redirect('admin/product/WarrentyController/');

      

    }


    
}


?>