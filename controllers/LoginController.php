<?php 
class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Loginmodel');
        date_default_timezone_set('Asia/Kolkata');

        
    }

    public function index(){

        $this->load->view('login');

    }


    public function register(){
       if(isset($_POST['submit'])){

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $date =  date('Y-m-d H:i:s');
        $formArray['fname'] =$fname;
        $formArray['lname'] =$lname; 
        $formArray['username'] =$username; 
        $formArray['password'] =$password; 
        $formArray['created_at'] =$date; 
        $this->db->insert('users',$formArray);

        $this->session->set_flashdata('success','User Created Succesfully');
                            
        redirect('LoginController');
       }
        $this->load->view('register');

    }

    public function login(){
        $username  = $this->input->post('username');
        $password  = $this->input->post('password');

        $userdata = $this->Loginmodel->getLoginusers($username,$password);
        if(!empty($userdata)){
            $userid = $userdata[0]['id'];
            $this->session->set_userdata('id',$userid);                            
            redirect('Home');

        }else{

            $this->session->set_flashdata('failure','Incorrect Username and Password');
            redirect('LoginController');

        }
        $this->load->model('Loginmodel');

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('LoginController');
    }
    
}




?>