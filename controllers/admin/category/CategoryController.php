<?php 
    class CategoryController extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('admin/category/Categorymodel');
        }


        public function index(){
            $data['category'] = $this->Categorymodel->getCategory();
            $this->load->view('admin/category/category',$data);

        }

        public function addCategory(){
            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y-m-d H:i:s');

            if(isset($_POST['submit'])){

               $category = $this->input->post('catname');
               
             

               $config['upload_path']          = 'admin-assets/uploads/category-image/';
               $config['allowed_types']        = '*';
            //    $config['max_size']             = 100;
            //    $config['max_width']            = 1024;
            //    $config['max_height']           = 768;

               $this->load->library('upload', $config);

               if ( ! $this->upload->do_upload('userfile'))
               {
                       $error = array('error' => $this->upload->display_errors());

                       
               }
               else
               {
                       $data = array('upload_data' => $this->upload->data());
                        $imagename = $data['upload_data']['file_name'];
                     
                    


               $formArray = array();
               $formArray['catname'] = $category;
               $formArray['image'] = $imagename;
               $formArray['created_at'] = $date;
               $this->db->insert('category',$formArray);
               $this->session->set_flashdata('success','Category Save Succesfully');
               redirect('admin/category/CategoryController');

            }}else{
                
                $this->load->view('admin/category/addcategory');
                
            }
        }

        public function delCategory(){

            $cateid = $this->uri->segment(5);
            $this-> db->where('id', $cateid);
            $this->db->delete('category');
            $this->session->set_flashdata('success','Product Deleted Successfully');
            redirect('admin/category/CategoryController');

        }

        public function editCategory(){
            $cateid = $this->uri->segment(5);
            $data['category'] = $this->Categorymodel->getCategorybyid($cateid);
            if(isset($_POST['submit'])){
                
                $category = $this->input->post('catname');
                $hdnimg = $this->input->post('hdnimage');
                $imageeee = $_FILES['userfile']['name'][0];
                if($imageeee!=""){

                $config['upload_path']          = 'admin-assets/uploads/category-image/';
                $config['allowed_types']        = 'gif|jpg|png';
             //    $config['max_size']             = 100;
             //    $config['max_width']            = 1024;
             //    $config['max_height']           = 768;
 
                $this->load->library('upload', $config);
 
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
 
                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                         $imagename = $data['upload_data']['file_name'];
                      
                }}else{

                    $imagename = $hdnimg;
                }
 
 
                $formArray = array();
                $formArray['catname'] = $category;
                $formArray['image'] = $imagename;
                $this->db->where('id', $cateid);
                $this->db->update('category', $formArray);
                $this->session->set_flashdata('success','Category Updated Succesfully');
                redirect('admin/category/CategoryController');

             }else{
            $this->load->view('admin/category/editcategory',$data);
            }


        }

        public function viewCategory(){
            $cateid = $this->uri->segment(5);
            $data['category'] = $this->Categorymodel->getCategorybyid($cateid);
            $this->load->view('admin/category/viewcategory',$data);

        }
        
    }
    



?>