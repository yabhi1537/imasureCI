<?php 
    class Contactus extends CI_Controller
    {
        
        public function index(){
            $this->load->model('Pagesmodel');
            $pagename = $this->uri->segment(1);
            if($pagename=="Contactus"){
                $data['pagename'] =  $this->Pagesmodel->getPages($pagename);
            }
        
            $this->load->model('Wishingmodel');
            $data['category'] =  $this->Wishingmodel->getCategory();
            $this->load->view('contact',$data);
            
        }
        
        public function savecontact(){
            date_default_timezone_set('Asia/Kolkata');
            $date =  date('Y-m-d H:i:s');
            
           $name = $this->input->post('name');
           $lastName = $this->input->post('lastName');
           $phone = $this->input->post('phone');
           $email = $this->input->post('email');
           $message = $this->input->post('message');
           $fullName = $name." ".$lastName;
           $formArray['name'] = $fullName;
           $formArray['phone'] = $phone;
           $formArray['email'] = $email;
           $formArray['message'] = $message;
           $formArray['created_at'] = $date;
           
           $this->sendMail($fullName,$phone,$email,$message);
           
           $this->db->insert('contact',$formArray);
            
            $this->session->set_flashdata('success','Request Send Successfully');
           
           redirect('thank-you');
        }
        
        function thankYou(){
            $this->load->view('thankyou');
        }
        
        function sendMail($name,$phone,$email,$message){
            $this->load->library('email');
            $html = "
                        <table>
                            <tr>
                                <td>Name </td>
                                <td> ".$name."</td>
                            </tr>
                             <tr>
                                <td>Phone </td>
                                <td> ".$phone."</td>
                            </tr>
                             <tr>
                                <td>Email </td>
                                <td> ".$email."</td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td> ".$message."</td>
                            </tr>
                        </table>
            ";
            
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.atzean.com';
            $config['smtp_user'] = 'sonusharma@atzean.com';
            $config['smtp_pass'] = 'x%r_NLXp3?Aj';
            $config['smtp_port'] = 587;
            $config['newline'] = "\r\n";
            $this->email->initialize($config);
            // $this->email->set_newline("\r\n");
            $this->email->from("sonusharma@atzean.com", 'Identification');
            $this->email->to("sonusharma28375@gmail.com");
            $this->email->subject('Inquiry Mail');
            $this->email->message($html);
            //Send mail
            if($this->email->send()){
                $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
                echo "Congragulation Email Send Successfully.";
           } else{
                echo "You have encountered an error";
                echo $this->email->print_debugger();
                $this->session->set_flashdata("email_sent","You have encountered an error");
            }
           // die();
        }
        
    }

?>