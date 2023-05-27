

<?php 
class BannerController extends CI_Controller
{
    public function index(){
        $this->load->model('admin/Homemodel');
        $data['prdt']  =  $this->Homemodel->getProdcuts();
        $this->load->view('admin/banners',$data);
    }
    
    public function saveData(){
        
                $pid = $this->input->post('products');
                $config['upload_path']          = 'admin-assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|mp4';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        
                        $this->session->set_flashdata('failure',$error);
                        redirect('admin/BannerController');
                }
                else
                {
                       $data = array('upload_data' => $this->upload->data());
                       $imagename = $data['upload_data']['file_name'];
                       
                       $formArray['video'] = $imagename;
                       
                       $this->db->where('id',$pid);
                       $this->db->update('products',$formArray);
                       $this->session->set_flashdata('success','Banner updated Successfylly');
                       redirect('admin/BannerController');
                        
                }
        
        
    }
    
}


?>