<?php 
class RequestContoller extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('admin/Requestmodel');
    }
    public function index(){

        $data['request'] = $this->Requestmodel->getRequestusers();

        $this->load->view('admin/request/request',$data);

    }

    public function deleteRequest(){

        $reqid = $this->uri->segment(5);

        $this->db->where('id',$reqid);
        $this->db->delete('inquery');
        $this->session->set_flashdata('success','Request Deleted Succesfully');
        redirect('admin/request/RequestContoller');
       

    }
    
}




?>