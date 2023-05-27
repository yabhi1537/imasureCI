<?php 

class SubcategoryController extends CI_Controller
{
    function __construct(){

        parent::__construct();
        $this->load->model('admin/category/Subcategorymode');

    }


    public function index(){
        $data['subcategory'] = $this->Subcategorymode->getSubcategory();
       
        $this->load->view('admin/category/subcategory',$data);

    }

    public function addSubcategory(){

        $data['category'] = $this->Subcategorymode->getCategory();
        if(isset($_POST['submit'])){
          $categoryid =  $this->input->post('catname');
          $subcategory =  $this->input->post('subcategory');

        //   $config['upload_path']          = 'admin-assets/uploads/subcategory/';
        //   $config['allowed_types']        = '*';
        //    $config['max_size']             = 100;
        //    $config['max_width']            = 1024;
        //    $config['max_height']           = 768;

        //   $this->load->library('upload', $config);

        //   if ( ! $this->upload->do_upload('image'))
        //   {
        //           $error = array('error' => $this->upload->display_errors());
        //             $errors = $error['error'];

        //             $this->session->set_flashdata('failure',$errors);
        //             redirect('admin/category/SubcategoryController/addSubcategory');

                  
        //   }
        //   else
        //   {
        //           $data = array('upload_data' => $this->upload->data());

        //           $image = $data['upload_data']['file_name'];

                   
        //   }

            $formArray['category'] = $categoryid;
            $formArray['subcat'] = $subcategory;
            $formArray['image'] = " ";
            $this->db->insert('subcategory',$formArray);
            $this->session->set_flashdata('success','Sub-Category Save Succesfully');
            redirect('admin/category/SubcategoryController');

        }else{
        $this->load->view('admin/category/addsubcategory',$data);
    }

    }

    public function delSubcategory(){

        $subcateid = $this->uri->segment(5);
        $this-> db->where('id', $subcateid);
        $this->db->delete('subcategory');
        $this->session->set_flashdata('success','Sub-Category Deleted Successfully');
        redirect('admin/category/SubcategoryController');
    }

    public function editSubcategory(){
        $subcateid = $this->uri->segment(5);
        $data['category'] = $this->Subcategorymode->getCategory();
    
        $data['subcategory'] = $this->Subcategorymode->getSubcategorybyid($subcateid);
        if(isset($_POST['submit'])){
            $categoryid =  $this->input->post('catname');
            $subcategory =  $this->input->post('subcategory');
            // $hdnimage =  $this->input->post('hdnimage');
            // $newimage = $_FILES['image']['name'];

            // if($newimage!=""){

            


            // $config['upload_path']          = 'admin-assets/uploads/subcategory/';
            // $config['allowed_types']        = '*';
          //    $config['max_size']             = 100;
          //    $config['max_width']            = 1024;
          //    $config['max_height']           = 768;
          
            //  $this->load->library('upload', $config);
             
            //  if ( ! $this->upload->do_upload('image'))
            //  {
            //      $error = array('error' => $this->upload->display_errors());
            //      $errors = $error['error'];
                 
            //      $this->session->set_flashdata('failure',$errors);
            //      redirect('admin/category/SubcategoryController/addSubcategory');
                 
                 
            //     }
            //     else
            //     {
            //         $data = array('upload_data' => $this->upload->data());
                    
            //         $image = $data['upload_data']['file_name'];
                    
                    
            //     }}else{

                    
            //         $image =  $this->input->post('hdnimage');


            //     }
                
                $formArray['category'] = $categoryid;
                $formArray['subcat'] = $subcategory;
                $formArray['image'] = $image;

             $this->db->where('id', $subcateid);
             $this->db->update('subcategory', $formArray);
             $this->session->set_flashdata('success','Sub-Category Updated Succesfully');
             redirect('admin/category/SubcategoryController');
 
         }else{

             $this->load->view('admin/category/editsubcategory',$data);
         }

    }

    public function viewCategory(){
        
        $subcateid = $this->uri->segment(5);

        $data['category'] = $this->Subcategorymode->getCategory();

        $data['subcategory'] = $this->Subcategorymode->getSubcategorybyid($subcateid);

        
        $this->load->view('admin/category/viewsubcategory',$data);

    }


    
}



?>