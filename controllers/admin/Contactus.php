<?php 
class Contactus extends CI_Controller
{
    public function index(){
        $this->load->model('admin/Homemodel');
        
        $data['contact'] = $this->Homemodel->getContact();
        
        $this->load->view('admin/contact',$data);
    }
    
    public function deletecontact(){
        
        $conid = $this->uri->segment(4);
        
        $this->db->where('id',$conid);
            
        $this->db->delete('contact');
        
        $this->session->set_flashdata('success','Request Deleted Succesfully');
        
        redirect('admin/Contactus');
    }
    
}


?>