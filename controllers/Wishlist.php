<?php 
class Wishlist extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Wishingmodel');
    }

    public function index(){
        $userid = $this->session->userdata('id');
        $data['listes'] = $this->Wishingmodel->getWishes($userid);
      
        $this->load->view('wishlist',$data);

    }

    public function saveWishlist(){
        $userid = $this->session->userdata('id');
        $pid = $this->input->post('productid');
        $formArray['productid'] =$pid;
        $formArray['userid'] =$userid;
        $wishes = $this->Wishingmodel->getWishlist($pid,$userid);
       
        $eishescount = count($wishes);
        if($eishescount=='0'){

        $this->db->insert('wishlist',$formArray);

        }else{

            $this->db->where('id',$wishes[0]['id']);
            $this->db->delete('wishlist');

        }
    }
    
}



?>