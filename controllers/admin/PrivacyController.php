<?php 
class PrivacyController extends CI_Controller
{
    public function index(){
        $this->load->model('admin/Homemodel');
        $data['privacy_policy']  =  $this->db->get('privacy_plolicy')->result_array();
        
       // print_r($data['bloglist']);die();
        $this->load->view('admin/privacy_policy',$data);
    }
   
    
     public function update(){
        
                $hdnID = $this->input->post('hdnID');
                $editor1 = $this->input->post('editor1');
                       
                $formArray['policy'] = $editor1;
                
                $this->db->where('id',$hdnID);
                $this->db->update('privacy_plolicy',$formArray);
                $this->session->set_flashdata('success','Policy update Successfylly');
                redirect('admin/privatepolicy');
        }
        
        public function termsAndCondition(){
            $this->load->model('admin/Homemodel');
            $data['terms_condition']  =  $this->db->get('terms_condition')->result_array();
            $this->load->view('admin/terms_condition',$data);
        }
        
        
        
        public function terms_update(){
        
                $hdnID = $this->input->post('hdnID');
                $editor1 = $this->input->post('editor1');
                       
                $formArray['terms'] = $editor1;
                
                $this->db->where('id',$hdnID);
                $this->db->update('terms_condition',$formArray);
                $this->session->set_flashdata('success','Terms&Condition update Successfylly');
                redirect('admin/terms_condition');
        }
    
}


?>