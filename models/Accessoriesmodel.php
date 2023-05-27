<?php 
class Accessoriesmodel extends CI_Model
{
    function getAccescategory(){
        
        $acces = $this->db->query("SELECT DISTINCT category,catimg FROM accesories");
         return  $acces->result_array();
        
    }
    
    function getallAccesries(){
       
       $allacces = $this->db->query("SELECT * FROM `products` WHERE item_type='0'");
         return  $allacces->result_array(); 
        
    }
    
    function getSingleproduct($replace){
        $prody = $this->db->query("SELECT * FROM `accesories` WHERE pname='$replace'");
        return $prody->result_array();
        
    }
    
    function getCategorydata($catname){
        
        $categ = $this->db->query("SELECT * FROM category AS a LEFT JOIN products AS b ON b.category=a.id WHERE a.catname='$catname' AND b.item_type='0'");
        return $categ->result_array();
    }
    
}

?>