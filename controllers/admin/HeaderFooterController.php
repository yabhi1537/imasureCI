<?php 
class HeaderFooterController extends CI_Controller
{
    public function index(){
        $this->load->model('admin/Homemodel');
        $data['headerfooter']  =  $this->db->get('headerfooter')->result_array();
        
       // print_r($data['bloglist']);die();
        $this->load->view('admin/headerFooterViewEdit',$data);
    }
    
    public function add(){
        $this->load->view('admin/blogadd');
    }
    
    public function store(){
        
                $title = $this->input->post('title');
                $heading = $this->input->post('heading');
                $description = $this->input->post('editor1');
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                
                $config['upload_path']          = 'admin-assets/uploads/';
                $config['allowed_types']        = '*';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        
                        $this->session->set_flashdata('failure',$error);
                        redirect('admin/BlogsController/add');
                }
                else
                {
                       $data = array('upload_data' => $this->upload->data());
                       $imagename = $data['upload_data']['file_name'];
                       
                       $formArray['title'] = $title;
                       $formArray['heading'] = $heading;
                       $formArray['imags'] = $imagename;
                       $formArray['description'] = $description;
                       $formArray['meta_title'] = $meta_title;
                       $formArray['meta_description'] = $meta_description;
                       
                       $this->db->insert('blog',$formArray);
                       $this->session->set_flashdata('success','Blog create Successfylly');
                       redirect('admin/headerfooter');
                        
                }
        
        
    }
    
    function deleteBlogs(){
        $id = $this->input->post('id'); 
        $this->db->where('id',$id);
        $this->db->delete('blog');
    }
    
    function edit(){
        $id = $this->uri->segment(4);
        $this->load->model('admin/Homemodel');
        $data['blog']  =  $this->Homemodel->getBlog($id);
        $this->load->view('admin/blogedit',$data);
    }
    
     public function update(){
        
                $hdnID = $this->input->post('hdnID');
                $customercare = $this->input->post('customercare');
                $sales = $this->input->post('sales');
                $editor1 = $this->input->post('editor1');
                $editor2 = $this->input->post('editor2');
                $editor3 = $this->input->post('editor3');
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $twiter = $this->input->post('twiter');
                $linkdin = $this->input->post('linkdin');
                $footer_title = $this->input->post('footer_title');
               
                
                       
                $formArray['customer_care'] = $customercare;
                $formArray['sales_email'] = $sales;
                $formArray['aboute_story'] = $editor1;
                $formArray['usefule_link'] = $editor2;
                $formArray['contact'] = $editor3;
                $formArray['facebook'] = $facebook;
                $formArray['instagram'] = $instagram;
                $formArray['twiter'] = $twiter;
                $formArray['linkdin'] = $linkdin;
                $formArray['footer_text'] = $footer_title;
                
                $this->db->where('id',$hdnID);
                $this->db->update('headerfooter',$formArray);
                $this->session->set_flashdata('success','header footer update Successfylly');
                redirect('admin/headerfooter');
        }
    
}


?>