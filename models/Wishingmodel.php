<?php 

class Wishingmodel extends CI_Model
{
    public function getWishlist($pid,$userid){

       $list =  $this->db->query("SELECT * FROM `wishlist` WHERE productid='$pid' && userid='$userid'");
       return $list->result_array();

    }

    public function getWishes($userid){

     $wishes = $this->db->query("SELECT wishlist.productid,wishlist.userid,products.id, products.pname,products.price,products.discount,products.description,products.image
        FROM wishlist
        INNER JOIN products ON wishlist.productid = products.id WHERE wishlist.userid='$userid' ");
      
    return $wishes->result_array();
    }

    public function getCategory(){

        $category = $this->db->query("SELECT * FROM `category`");
        return $category->result_array();

    }

    public function getSubcategory($catid){

        $sub = $this->db->query("SELECT * FROM `subcategory` WHERE category='$catid'");
        
        return $sub->result_array();


    }
    
    
    public function getSearching($product){
        
        
         $filter = $this->db->query("SELECT * FROM `products` WHERE `pname` LIKE '%$product%'");
         return $filter->result_array();
        
    }
    
    public function getCategoryProducts($productid){
        
         $product = $this->db->query("SELECT * FROM `products` WHERE `category`='$productid'");
         return $product->result_array();
        
        
    }
    
    
    
    public function getCategories($categoryName){
        $product = $this->db->query("SELECT * FROM `category` WHERE `catname` = '$categoryName'");
        return $product->result_array();
    }
    
  


    public function getChildSubCategoryId($productid){
        
        $product = $this->db->query("SELECT * FROM `child_subcategory` WHERE `slug` = '$productid'"); 
        
        return $product->result_array();
       
       
   }
   
      public function getChildSubCategoryProducts($productid){
         
    $product = $this->db->query("SELECT * FROM `products` WHERE `child_sub_cat_id`='$productid'");

     
    return $product->result_array();
 
}


   public function getProdycnySubcateid($productid){
         
    $product = $this->db->query("SELECT * FROM `products` WHERE `sub_category`='$productid'");

     
    return $product->result_array();
 
}

    
    public function getSubCategoryProducts($productid){
        
         $product = $this->db->query("SELECT * FROM `products` WHERE `product_title`='$productid'");
           
         return $product->result_array();
        
        
    }
    
    public function getCategoryrel($productid){
        
         $category = $this->db->query("SELECT * FROM `category` WHERE `id`='$productid'");
         return $category->result_array();
        
    }
    
        public function getSubCategoryrel($productid){
        
         $subcatecategory = $this->db->query("SELECT * FROM `subcategory` WHERE `category`='$productid'");
         return $subcatecategory->result_array();
        
    }
    
    public function getSubcategories($subid){
        
        $sub = $this->db->query("SELECT * FROM `subcategory` WHERE subcat='$subid'");
        return $sub->result_array();
        
    }
    
    public function getCategiest($subcateid){
        
         $subsss = $this->db->query("SELECT * FROM `products` WHERE  sub_category ='$subcateid'");
         return $subsss->result_array();
        
    }
    
    public function getCategoriesid($catname){
        
        $cates = $this->db->query("SELECT * FROM `category` WHERE catname='$catname'");
        return $cates->result_array();
    }
    
}



?>