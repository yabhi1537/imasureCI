<?php 

class Categorymodel extends CI_Model
{
    
    public function getCategory(){

        $category = $this->db->query("SELECT * FROM `category`");
        return $category->result_array();

    }

    public function getCategorybyid($catid){

        $category = $this->db->query("SELECT * FROM `category` WHERE id='$catid'");
        return $category->result_array();

    }

}



?>