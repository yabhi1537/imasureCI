<?php 
class Pagesmodel extends CI_Model{
    
    function getPages($pages){
            
          $pages =   $this->db->query("SELECT * FROM `pages` WHERE name='$pages'");
          return  $pages->result_array();
    }
    
}

?>