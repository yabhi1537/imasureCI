<?php 
class Products extends CI_Controller
{
    
    function __construct(){
        
        parent::__construct();
        $this->load->model('Pagesmodel');
    }
    
    public function index(){
        // die();
        $pagename = $this->uri->segment(1);
        // print_r($pagename);die();
        if($pagename=="products"){
            $data['pagename'] =  $this->Pagesmodel->getPages($pagename);
      
        }
        
        $this->load->model('Wishingmodel');
        // $data['category'] =  $this->Wishingmodel->getCategory();
        $product_id = $this->uri->segment(2);
        
        $replace =    str_replace("-"," ",$product_id);
       
     // print_r($product_id);die();
        $subcategory=  $this->Wishingmodel->getSubcategories($replace);
        $category=  $this->Wishingmodel->getCategories($replace);
        // $categosryid = $category[0]['id'];
            $subcategrychildid =  $this->Wishingmodel->getChildSubCategoryId($replace);
            
        if(!empty($subcategory)){
            $data['products'] =  $this->Wishingmodel->getProdycnySubcateid($subcategory[0]['id']);
            $catrgoryName = $subcategory[0]['id'];
            $data['catestep'] = 1;
        }else if(!empty($subcategrychildid)){
            $catrgoryName = $subcategrychildid[0]['id'];
            // $str = $this->db->last_query();
            $data['products'] =  $this->Wishingmodel->getChildSubCategoryProducts($subcategrychildid[0]['id']);
            $data['catestep'] = 2;
        }else if(!empty($category)){
            $catrgoryName = $category[0]['id'];
            $data['products'] =  $this->Wishingmodel->getCategoryProducts($category[0]['id']);
            $data['catestep'] = 0;
    //   print_r($data['products']);die();
        }
         
        //$categosryid = count($category['id'] ?? []);
        // $categosryid = isset($category['id']) ? count($category['id']) : 0;
        

  

        // print_r($data['catestep']);die();

        
        

       
     
        
        // // print_r($subcategryid);die();
         $data['categorysaasa'] =  $replace;
         $data['subcategosryid'] = $catrgoryName;
        // $data['subcategoryid'] =  $this->Wishingmodel->getSubCategoryrel($categosryid);
        $this->load->view('products',$data);
        
        
    } 
    
    
    function all_products(){
        $data['allProduct'] = $this->db->get('products')->result_array();
        $this->load->view('all_products',$data);
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