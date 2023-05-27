<?php
class PageController extends CI_Controller{

    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    
    function index(){
        
        $pages= $this->db->get('pages');
        $data['page'] = $pages->result_array();
        $this->load->view('admin/pages',$data);
    }
    
    function addPages(){
      
      $this->load->view('admin/addpages');  
        
    }
    
    function store(){
        $date = date('Y-m-d H:i:s');

       $formArray['name'] = $this->input->post('page');
       $formArray['title'] = $this->input->post('title');
       $formArray['description'] = $this->input->post('description');
       $formArray['keyword'] = $this->input->post('keyworsd');
       $formArray['created_at'] = $date;
       $this->db->insert('pages',$formArray);
       $this->session->set_flashdata('success','Data added succesfully');
       redirect('admin/PageController');
    }
    
    function editPages(){
        $product_id = $this->uri->segment(4);
        $this->db->where('id',$product_id);
        $pages = $this->db->get('pages');
        $data['page'] = $pages->result_array();
        $this->load->view('admin/editpages',$data);
    }
    
    function updatePages(){
        
        $product_id = $this->uri->segment(4);
        $formArray['name'] = $this->input->post('page');
       $formArray['title'] = $this->input->post('title');
       $formArray['description'] = $this->input->post('description');
       $formArray['keyword'] = $this->input->post('keyworsd');
       $this->db->where('id',$product_id);
       $this->db->update('pages',$formArray);
       $this->session->set_flashdata('success','Data updated succesfully');
        redirect('admin/PageController');
    }
    
    function deletePages(){
       $id = $this->input->post('id'); 
       $this->db->where('id',$id);
       $this->db->delete('pages');
    }
    
    
}
?>