<?php 
    class Subcategorymode extends CI_Model
    {

        public function getCategory(){

            $category = $this->db->query("SELECT * FROM `category`");
            return $category->result_array();

        }

        public function getSubcategory(){

            $subcategory = $this->db->query("SELECT subcategory.id,subcategory.image,category.catname,subcategory.subcat ,subcategory.category
            FROM subcategory
            INNER JOIN category ON category.id = subcategory.category");
            return $subcategory->result_array();

        } 

        public function getSubcategorybyid($subcateid){

            $subcat = $this->db->query("SELECT * FROM `subcategory` WHERE id='$subcateid'");
            return $subcat->result_array();
        }
        
        function getchildSubcategory(){
            $subcat = $this->db->query("SELECT a.*,b.subcat,b.id as subCatId FROM `child_subcategory` as a LEFT JOIN subcategory as b ON b.id= a.sub_category");
            return $subcat->result_array();
        }
        
        function getChildSubcategorybyid($subcateid){
            $subcat = $this->db->query("SELECT * FROM `child_subcategory` WHERE id='$subcateid'");
            return $subcat->result_array();
        }

        
        
    }
    


?>