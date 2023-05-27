<?php 
class Homemodel extends CI_Model
{

    public function getProducts(){

        $products = $this->db->query("SELECT * FROM `products` WHERE category='7' AND item_type='1'  ORDER BY id asc LIMIT 4 ");
        return $products->result_array();

    }
    
     public function getBlogs(){

        $products = $this->db->query("SELECT * FROM `blog` ORDER BY id DESC");
        return $products->result_array();

    }

    public function getMobilcate(){

        $mobile = $this->db->query("SELECT * FROM `products`  WHERE pname='HP' AND item_type='1'");
        return $mobile->result_array();

    }

    public function getIpad(){

        $ipad = $this->db->query("SELECT * FROM `products` WHERE category='8' AND item_type='1' ORDER BY id desc LIMIT 4");
        return $ipad->result_array();

    }
    
    public function getIphone(){

        $ipad = $this->db->query("SELECT * FROM `products` WHERE category='13' AND item_type='1' ORDER BY id desc LIMIT 4");
        return $ipad->result_array();

    }

    public function getSingleproduct($productid){
        // $singleprods = $this->db->query("SELECT * FROM `products` WHERE id='$productid'");
        $singleprods = $this->db->query("SELECT a.*,b.catname FROM `products` AS a INNER JOIN category AS b ON  b.id = a.category WHERE a.product_title='".$productid."'");
        return $singleprods->result_array();
    }

    public function getUseraccount($userid){
        $account = $this->db->query("SELECT * FROM `users` WHERE id='$userid'");
        return $account->result_array();
    }

    public function getProductfeature($userid){
        $account = $this->db->query("SELECT * FROM `product_features` WHERE productid='$userid'");
        return $account->result_array();
    }

    public function getDeliverycont($userid){
        $delivery = $this->db->query("SELECT * FROM `delivery` WHERE productid='$userid'");
        return $delivery->result_array();
    }

    public function getWarrenty($userid){
        $warrenty = $this->db->query("SELECT * FROM `warrenty` WHERE productid='$userid'");
        return $warrenty->result_array();
    }


    public function getDesciption($userid){
        $desc = $this->db->query("SELECT * FROM `product_description` WHERE productid='$userid'");
        return $desc->result_array();
    }

    public function getWishlist($userid){
        $wish = $this->db->query("SELECT * FROM `wishlist`");
        return $wish->result_array();
    }
    
    public function getSumvalues($signleid){
        
        $ratings = $this->db->query("SELECT SUM(rating) AS ratingss FROM review WHERE pid='$signleid'");
        return $ratings->result_array();
    }
    
    public function getCount($signleid){
        
         $ratingcount = $this->db->query("SELECT * FROM review WHERE pid='$signleid'");
         return $ratingcount->num_rows();
        
    }
    
    
    public function getCategory($categoryid){
    $category =$this->db->query("SELECT * FROM `category` WHERE id='$categoryid'");
    return  $category->result_array();
    }
    
    public function getCategoryname($categoryname){
        
        $catname = $this->db->query("SELECT * FROM `products` WHERE category LIKE '%$categoryname%' AND item_type='0'");
        return $catname->result_array();
        
    }
    
     function getBlog($id){
         $products = $this->db->query("SELECT * FROM `blog` WHERE id='".$id."'");
        return $products->result_array();
    }
    
}




?>