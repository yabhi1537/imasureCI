<?php 
class BlogsController extends CI_Controller
{
    public function index(){
        $this->load->model('admin/Homemodel');
        $data['bloglist']  =  $this->Homemodel->getBlogs();
        
       // print_r($data['bloglist']);die();
        $this->load->view('admin/blog',$data);
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
                       redirect('admin/blogs');
                        
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
                $title = $this->input->post('title');
                $heading = $this->input->post('heading');
                $description = $this->input->post('editor1');
                 $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                
                if($_FILES['userfile']['name'] != ""){
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
                    }
                }else{
                    $imagename = $this->input->post('hdnImg');
                }
                       
                $formArray['title'] = $title;
                $formArray['heading'] = $heading;
                $formArray['imags'] = $imagename;
                $formArray['description'] = $description;
                $formArray['meta_title'] = $meta_title;
                $formArray['meta_description'] = $meta_description;
                $this->db->where('id',$hdnID);
                $this->db->update('blog',$formArray);
                $this->session->set_flashdata('success','Blog update Successfylly');
                redirect('admin/blogs');
        }
    
}


?>