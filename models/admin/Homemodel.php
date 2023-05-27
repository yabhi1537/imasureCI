<?php 
class Homemodel extends CI_Model
{
    public function getProfiledata(){

     $profile =    $this->db->query("SELECT * FROM `admin` WHERE id='1'");
     return $profile->resul_array();

    }
    
    public function getContact(){
        
         $contact =    $this->db->query("SELECT * FROM `contact`");
        return $contact->result_array();
        
    }
    
    public function getProdcuts(){
        
        $proudct = $this->db->query("SELECT * FROM `products`");
        
        return $proudct->result_array();
        
    }
    
      public function getBlogs(){

        $products = $this->db->query("SELECT * FROM `blog` ORDER BY id DESC");
        return $products->result_array();

    }
    
    function getBlog($id){
         $products = $this->db->query("SELECT * FROM `blog` WHERE id='".$id."'");
        return $products->result_array();
    }
    
    
     function getBrandById($id){
         $products = $this->db->query("SELECT * FROM `brands` WHERE id='".$id."'");
        return $products->result_array();
    }
    
    function getSliderById($id){
         $products = $this->db->query("SELECT * FROM `sliders` WHERE id='".$id."'");
        return $products->result_array();
    }
    
}




?>