
<?php 

class SubcategoryminController extends CI_Controller
{
    function __construct(){ 

        parent::__construct();
        $this->load->model('admin/category/subcategoryminimode');

    }


    public function index(){
           $data['subcategory'] = $this->subcategoryminimode->getSubcategorymini();
       
        $this->load->view('admin/category/subcategorymini',$data);

    }

    public function addminicategory(){
        $data['subcategory'] = $this->subcategoryminimode->getsubCategory();
        $this->load->view('admin/category/addsubcategorymin',$data);
    }

    public function addSubcategorymini(){

        $data['subcategory'] = $this->subcategoryminimode->getsubCategory();
       
        if(isset($_POST['submit'])){
           $categoryid =  $this->input->post('subcategory');
           $subcategory =  $this->input->post('subcategorymini');
           

           $config['upload_path']          = 'admin-assets/uploads/subcategory/';
           $config['allowed_types']        = '*';
        //    $config['max_size']             = 100;
        //    $config['max_width']            = 1024;
        //    $config['max_height']           = 768;

           $this->load->library('upload', $config);
           
           if ( ! $this->upload->do_upload('image'))
           {
           
                   $error = array('error' => $this->upload->display_errors());
                    $errors = $error['error'];
                    print_r($error);die();

                    $this->session->set_flashdata('failure',$errors);
                    redirect('admin/category/SubcategoryminController/addSubcategorymini');

                  
           }
           else
           {
                   $data = array('upload_data' => $this->upload->data());

                   $image = $data['upload_data']['file_name'];
                   
                   
           }

            $formArray['subcategory_id'] = $categoryid;
            $formArray['subcategorymin'] = $subcategory;
            $formArray['image'] = $image;
            $this->db->insert('subcategorymini',$formArray);
            $this->session->set_flashdata('success','Sub-Category-min Save Succesfully');
            redirect('admin/category/SubcategoryminController');

        }else{
        $this->load->view('admin/category/addSubcategorymini',$data);
    }

    }

    public function editSubcategorymini(){
        $subcateid = $this->uri->segment(5);
        $data['category'] = $this->subcategoryminimode->getsubCategory();
    
        $data['subcategory'] = $this->subcategoryminimode->getSubcategorybyidmin($subcateid);
        if(isset($_POST['submit'])){
            $categoryid =  $this->input->post('subcategory_id');
            $subcategory =  $this->input->post('subcategorymini');
            $hdnimage =  $this->input->post('hdnimage');
            $newimage = $_FILES['image']['name'];
 
            if($newimage!=""){

            


            $config['upload_path']          = 'admin-assets/uploads/subcategory/';
            $config['allowed_types']        = '*';
          //    $config['max_size']             = 100;
          //    $config['max_width']            = 1024;
          //    $config['max_height']           = 768;
          
             $this->load->library('upload', $config);
             
             if ( ! $this->upload->do_upload('image'))
             {
                 $error = array('error' => $this->upload->display_errors());
                 $errors = $error['error'];
                 
                 $this->session->set_flashdata('failure',$errors);
                 redirect('admin/category/SubcategoryminController/editSubcategorymini');
                 
                 
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    
                    $image = $data['upload_data']['file_name'];
                    
                    
                }}else{

                    
                    $image =  $this->input->post('hdnimage');


                }
                
                $formArray['subcategory_id'] = $categoryid;
                $formArray['subcategorymin'] = $subcategory;
                $formArray['image'] = $image;
               
             $this->db->where('id', $subcateid);
             $this->db->update('subcategorymini', $formArray);
             $this->session->set_flashdata('success','Sub-Category-mini Updated Succesfully');
             redirect('admin/category/SubcategoryminController');
 
         }else{

             $this->load->view('admin/category/editsubcategorymini',$data);
         }

    }
    public function delSubcategorymini(){

        $subcateid = $this->uri->segment(5);
        $this-> db->where('id', $subcateid);
        $this->db->delete('subcategorymini');
        $this->session->set_flashdata('success','Sub-Category-mini Deleted Successfully');
        redirect('admin/category/SubcategoryminController');
    }
    public function viewCategorymini(){
        
        $subcateid = $this->uri->segment(5);

        $data['category'] = $this->subcategoryminimode->getsubCategory();
    
        $data['subcategory'] = $this->subcategoryminimode->getSubcategorybyidmin($subcateid);

        
        $this->load->view('admin/category/viewsubcategorymini',$data);

    }





}
 ?>