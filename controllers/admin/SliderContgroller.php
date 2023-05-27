<?php 
class SliderContgroller extends CI_Controller
{
    public function index(){
        $this->load->model('admin/Homemodel');
        $data['brandslist']  =  $this->db->get('sliders')->result_array();
        
        // print_r($data['brandslist']);die();
        $this->load->view('admin/slider/index',$data);
    }
    
    public function add(){
        $this->load->view('admin/slider/add');
    }
    
    public function store(){
        
                $links = $this->input->post('links');
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
                        redirect('admin/sliders/add');
                }
                else
                {
                       $data = array('upload_data' => $this->upload->data());
                       $imagename = $data['upload_data']['file_name'];
                       
                       $formArray['links'] = $links;
                       $formArray['imags'] = $imagename;
                       
                       
                       $this->db->insert('sliders',$formArray);
                       $this->session->set_flashdata('success','Slider create Successfylly');
                       redirect('admin/sliders');
                        
                }
        
        
    }
    
    function deleteBrand(){
        $id = $this->input->post('id'); 
        $this->db->where('id',$id);
        $this->db->delete('sliders');
    }
    
    function edit(){
        $id = $this->uri->segment(4);
        $this->load->model('admin/Homemodel');
        $data['Brand']  =  $this->Homemodel->getSliderById($id);
        // print_r($data['Brand'] );die;
        $this->load->view('admin/slider/edit',$data);
    }
    
     public function update(){
        
                $hdnID = $this->input->post('hdnID');
                $links = $this->input->post('links');
                
                
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
                        redirect('admin/sliders/add');
                    }
                    else
                    {
                        
                       $data = array('upload_data' => $this->upload->data());
                       $imagename = $data['upload_data']['file_name'];
                    }
                }else{
                    $imagename = $this->input->post('hdnImg');
                }
                       
                $formArray['links'] = $links;
                $formArray['imags'] = $imagename;
                
                $this->db->where('id',$hdnID);
                $this->db->update('sliders',$formArray);
                $this->session->set_flashdata('success','Slider update Successfylly');
                redirect('admin/sliders');
        }
    
}


?>