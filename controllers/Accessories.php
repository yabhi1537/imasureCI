<?php 
class Accessories extends CI_Controller
{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Accessoriesmodel');
         $this->load->model('Wishingmodel');
         $this->load->model('Pagesmodel');
    }
    
    function index(){
        $pagename = $this->uri->segment(1);
        
       // print_r($pagename);die();
        if($pagename=="Accessories"){
        $data['pagename'] =  $this->Pagesmodel->getPages($pagename);
      
        }
        
        $data['category'] =  $this->Wishingmodel->getCategory();
        $data['acccategory'] = $this->Accessoriesmodel->getAccescategory();
        $data['allacces'] = $this->Accessoriesmodel->getallAccesries();
       $this->load->view('accessories',$data);
    }
    
}



?>