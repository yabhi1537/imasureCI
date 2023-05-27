<?php 
class Productfeatresmodel extends CI_Model
{
    public function getProductname(){


        $features = $this->db->query("SELECT * FROM `products`");
        return $features->result_array();

    }


    public function getFeatures(){


        $features = $this->db->query("SELECT product_features.id,product_features.productid,product_features.feature, products.pname
        FROM products
        INNER JOIN product_features ON product_features.productid = products.id");
        return $features->result_array();

    }


    public function getDelivery(){


        $delivery = $this->db->query("SELECT delivery.id,delivery.productid,delivery.delierydetails, products.pname
        FROM delivery
        INNER JOIN products ON delivery.productid = products.id");
        return $delivery->result_array();

    }


    public function getWarrenty(){


        $warrenty = $this->db->query("SELECT warrenty.id,warrenty.productid,warrenty.warrenty, products.pname
        FROM warrenty
        INNER JOIN products ON warrenty.productid = products.id");
        return $warrenty->result_array();

    }

    public function getProductiondescription(){

        $description = $this->db->query("SELECT product_description.id,product_description.productid,product_description.productdesc, products.pname
        FROM product_description
        INNER JOIN products ON product_description.productid = products.id");
        return $description->result_array();

    }

    
}




?>