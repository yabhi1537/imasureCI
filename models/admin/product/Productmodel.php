<?php 
    class Productmodel extends CI_Model
    {
        public function getProduct(){

           $products =  $this->db->query("SELECT * FROM `products` ORDER BY id DESC");
            return $products->result_array();

        }
        
        public function getColorImg($id){
            $products =  $this->db->query("SELECT * FROM `color` WHERE pid='$id'");
            return $products->result_array();
        }

        public function getProductbyid($productid){

            $products =  $this->db->query("SELECT * FROM `products` WHERE id='$productid'");
             return $products->result_array();
 
         }

         public function getCategories(){

            $category =  $this->db->query("SELECT * FROM `category`");
            return $category->result_array(); 

         }
         
         public function getSubcategories(){
             
             $subcate = $this->db->query("SELECT * FROM `subcategory`");
             return $subcate->result_array();
         }
         public function getSubcategoriesmini(){
             
            $subcate = $this->db->query("SELECT * FROM `subcategorymini`");
            return $subcate->result_array();
        }
         
         public function getSubcategory($subid){
             if($subid==""){
                 
                 $subcate = $this->db->query("SELECT * FROM `subcategory`");
             }else{
                 
                 $subcate = $this->db->query("SELECT * FROM `subcategory` WHERE category='$subid'");
             }
             
             return  $subcate->result_array();
         }

         public function getSubcategorymini($subid){
            if($subid==""){
                
                $subcate = $this->db->query("SELECT * FROM `subcategorymini`");
            }else{
                
                $subcate = $this->db->query("SELECT * FROM `subcategorymini` WHERE subcategory='$subid'");
            }
            
            return  $subcate->result_array();
        }

        
    }
    

?>