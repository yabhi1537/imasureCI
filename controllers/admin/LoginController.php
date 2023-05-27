<?php 
    class LoginController extends CI_Controller
    {

        public function index(){
            $this->load->view('admin/login');
        }

        public function Login(){
           
            $email = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('admin/Logimodel');
            $adminlogin =  $this->Logimodel->getUserlogin($email,$password);
            
            if(!empty($adminlogin)){

                $adminid = $adminlogin[0]['id'];
                $adminame = $adminlogin[0]['name'];
                $imgame = $adminlogin[0]['profile'];
                
                $this->session->set_userdata('id',$adminid);
                $this->session->set_userdata('name',$adminame);
                $this->session->set_userdata('profile',$imgame);
                redirect('admin/HomeController');

            }else{

                $this->session->set_flashdata('failure','Username and Password Incorrect');
                            
                redirect('admin/LoginController');


            }

        }
        public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin/LoginController');
		}
        
    }
    


?>