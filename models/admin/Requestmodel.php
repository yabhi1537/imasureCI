<?php 
class Requestmodel extends CI_Model
{
    public function getRequestusers(){


       $usersd=   $this->db->query("SELECT inquery.id,inquery.name,inquery.email,inquery.address,inquery.contact_no, products.pname
        FROM inquery
        INNER JOIN products ON inquery.pid = products.id");

        return $usersd->result_array(); 

    }
    
}



?>