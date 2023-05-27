<?php 

class ChildSubCategory extends CI_Controller
{
    function __construct(){

        parent::__construct();
        $this->load->model('admin/category/Subcategorymode');

    }


    public function index(){
        $data['subcategory'] = $this->Subcategorymode->getchildSubcategory();
       
        $this->load->view('admin/category/child_sub_category/subcategory',$data);

    }
    
    function urlSafeString($string)
        {   
            $mystr = str_replace("-","_",strtolower($string));
            $cleanString = preg_replace('/[^A-Za-z0-9\-]/',' ',$mystr);
            return $cleanString;
        }

    public function addSubcategory(){

        $data['sub_category'] = $this->Subcategorymode->getSubcategory();
        if(isset($_POST['submit'])){
            $categoryid =  $this->input->post('catname');
            $subcategory =  $this->input->post('subcategory');
            $config['upload_path']          = 'admin-assets/uploads/category-image/';
            $config['allowed_types']        = '*';
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $imagename = $data['upload_data']['file_name'];
            
                $formArray['images'] = $imagename;
            }
            
            $slug = $this->urlSafeString($subcategory);
            
            $formArray['slug'] = $slug;
            $formArray['sub_category'] = $categoryid;
            $formArray['category_name'] = $subcategory;
            $this->db->insert('child_subcategory',$formArray);
            $this->session->set_flashdata('success','Sub-Category Save Succesfully');
            redirect('admin/child-sub-category');

        }else{
        $this->load->view('admin/category/child_sub_category/addsubcategory',$data);
    }

    }

    public function delSubcategory(){

        $subcateid = $this->uri->segment(5);
        $this-> db->where('id', $subcateid);
        $this->db->delete('child_subcategory');
        $this->session->set_flashdata('success','Sub-Category Deleted Successfully');
        redirect('admin/child-sub-category');
    }

    public function editSubcategory(){
        $subcateid = $this->uri->segment(4);
        $data['sub_category'] = $this->Subcategorymode->getSubcategory();
        $data['subcategory'] = $this->Subcategorymode->getChildSubcategorybyid($subcateid);
        $this->load->view('admin/category/child_sub_category/editsubcategory',$data);
    }
    
    function updateSub(){
        $subcateid = $this->uri->segment(5);
        $categoryid =  $this->input->post('catname');
        $subcategory =  $this->input->post('subcategory');
        $config['upload_path']          = 'admin-assets/uploads/category-image/';
        $config['allowed_types']        = '*';
         $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $imagename = $data['upload_data']['file_name'];
            
             $formArray['images'] = $imagename;
        }
        $slug = $this->urlSafeString($subcategory);
            
            $formArray['slug'] = $slug;
        $formArray['sub_category'] = $categoryid;
        $formArray['category_name'] = $subcategory;
        $this->db->where('id', $subcateid);
        $this->db->update('child_subcategory', $formArray);
        $this->session->set_flashdata('success','Sub-Category Updated Succesfully');
        redirect('admin/child-sub-category');
    }

    public function viewCategory(){
        
        $subcateid = $this->uri->segment(5);

        $data['category'] = $this->Subcategorymode->getCategory();

        $data['subcategory'] = $this->Subcategorymode->getSubcategorybyid($subcateid);

        
        $this->load->view('admin/category/child_sub_category/viewsubcategory',$data);

    }


    
}



?>