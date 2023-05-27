<?php 
    class Cart extends CI_Controller
    {
        function __construct()
        {
            parent:: __construct();
            $this->load->model('Cartmodel');
        }

        public function index(){
            $userid = $this->session->userdata('id');

            $data['products'] = $this->Cartmodel->getCatdproduct($userid);

           
            
            if(isset($_POST['submit'])){

               $pid =  $this->input->post('pid');
               $userid =  $this->input->post('userid');
               if($userid==""){
                redirect('LoginController');
               }
               $formArray['pid'] = $pid;
               $formArray['userid'] = $userid;
               $carcount = $this->Cartmodel->getCarddetauls($pid,$userid);
               if($carcount=="0"){
               $this->db->insert('cart',$formArray);
            }
               redirect('Cart/'.$pid);
            }else{
                $this->load->view('cart',$data);
            }
        }
        
    }
    

?>