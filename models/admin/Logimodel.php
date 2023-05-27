<?php 
    class Logimodel extends CI_Model
    {
        public function getUserlogin($username,$password){

           $logindet =  $this->db->query("SELECT * FROM `admin` WHERE `username`='$username' && `password`='$password'");

           return  $logindet->result_array();

        }
        
    }
    


?>