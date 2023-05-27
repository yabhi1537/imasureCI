<?php 
class Loginmodel extends CI_Model
{

    public function getLoginusers($username,$password){

        $users = $this->db->query("SELECT * FROM `users` WHERE username='$username' && password='$password'");
        return $users->result_array();

    }
    
}



?>