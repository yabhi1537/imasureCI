<?php 
    class subcategoryminimode extends CI_Model
    {

        public function getsubCategory(){

            $subcategory = $this->db->query("SELECT * FROM `subcategory`");
            return $subcategory->result_array();

        }

        public function getSubcategorymini(){

           
            $subcategory = $this->db->query("SELECT subcategorymini.id,subcategorymini.image,subcategory.subcat,subcategorymini.subcategorymin ,subcategorymini.subcategory_id
            FROM subcategorymini
            INNER JOIN subcategory ON subcategory.id = subcategorymini.subcategory_id");
            
            return $subcategory->result_array();

        } 

        public function getSubcategorybyidmin($subcateid){

            $subcat = $this->db->query("SELECT * FROM `subcategorymini` WHERE id='$subcateid'");
            return $subcat->result_array();
        }

        
        
    }
    


?>