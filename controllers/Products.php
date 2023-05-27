<?php 
class Products extends CI_Controller
{
    
    function __construct(){
        
        parent::__construct();
        $this->load->model('Pagesmodel');
    }
    
    public function index(){
        $pagename = $this->uri->segment(1);
        if($pagename=="products"){
            $data['pagename'] =  $this->Pagesmodel->getPages($pagename);
      
        }
      
        
        $this->load->model('Wishingmodel');
        $data['category'] =  $this->Wishingmodel->getCategory();
        $product_id = $this->uri->segment(2);
       
        $category=  $this->Wishingmodel->getCategoriesid($product_id);
        $categosryid = $category[0]['id'];
        
        $data['products'] =  $this->Wishingmodel->getCategoryProducts($categosryid);
        
        // print_r($data['products']);die();
        $data['categorysaasa'] =  $this->Wishingmodel->getCategoryrel($categosryid);
        $data['subcategoryid'] =  $this->Wishingmodel->getSubCategoryrel($categosryid);
        
       // print_r($data['subcategoryid']);die();
        $this->load->view('products',$data);
        
        
    } 
    
    function getCategoryProduct(){
        $id = $this->input->post('id');
        // echo $id;
        $data['product'] = $this->Wishingmodel->getSubCategoryProducts($id);
        echo json_encode($data);
    }
    
    function subcategory(){
        
        $this->load->model('Pagesmodel');
        $pagename = $this->uri->segment(2);
      
        if($pagename=="subcategory"){
        $data['pagename'] =  $this->Pagesmodel->getPages($pagename);
      
        }
        $this->load->model('Wishingmodel');
        $data['category'] =  $this->Wishingmodel->getCategory();
        $this->load->model('Wishingmodel');
        $subid = $this->uri->segment(3);
            
        $replace =    str_replace("-"," ",$subid);
        
       
        
        $subcate = $this->Wishingmodel->getSubcategories($replace);
        
        
        $subcateid =$subcate[0]['id']; 
      
        $data['subcaterii'] = $this->Wishingmodel->getCategiest($subcateid);
    
        $data['subcate'] =$subcate; 
        
        
      
        $this->load->view('subcategory',$data);
        
        
    }
    
}

?>