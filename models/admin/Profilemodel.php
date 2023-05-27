<?php 
    class Profilemodel extends CI_Model
    {
        public function getProfile(){
            $profile = $this->db->query("SELECT * FROM `admin` WHERE id='1'");
            return $profile->result_array();
        }
        
    }
    


?>