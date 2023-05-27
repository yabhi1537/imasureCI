<?php 
class Cartmodel extends CI_Model
{
    public function getCarddetauls($pid,$userid){

        $carts = $this->db->query("SELECT * FROM `cart` WHERE pid='$pid' && userid='$userid'");
        return $carts->num_rows();
    }


    public function getCatdproduct($userid){

      $products=   $this->db->query("SELECT cart.pid, products.pname,products.price,products.discount,products.description,products.image
        FROM cart
        INNER JOIN products ON cart.pid = products.id WHERE cart.userid='$userid'");
    
    return $products->result_array();


    }
    
}



?>