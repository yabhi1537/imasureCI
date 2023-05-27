<?php 
    class Profile extends CI_Controller
    {
        public function index(){

            $this->load->model('admin/Profilemodel');

            $data['profile'] = $this->Profilemodel->getProfile();

            $this->load->view('admin/profile',$data);

        }

        public function updateProfile(){

           if(isset($_POST['submit'])){
               $username=  $this->input->post('username');
               $name=  $this->input->post('name');
               $phone=  $this->input->post('phone');
               $address=  $this->input->post('address');
                $formArray['username'] = $username;
                $formArray['name'] = $name;
                $formArray['mobileno'] = $phone; 
                $formArray['address'] = $address;

                $this->db->where('id', '1');

                $this->db->update('admin', $formArray);

                $this->session->set_flashdata('success','Profile Updated Succesfully');
                            
                redirect('admin/Profile');

           }else{

               $config['upload_path']          = 'admin-assets/img/avatars/';
                $config['allowed_types']        = 'gif|jpg|png';


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('profileimage'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $errors = $error['error'];

                        $this->session->set_flashdata('failure2',$errors);
                                    
                        redirect('admin/Profile');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $imagenae = $data['upload_data']['file_name'];
                        $formArray['profile'] = $imagenae;
                        $this->db->where('id', '1');

                        $this->db->update('admin', $formArray);
        
                        $this->session->set_flashdata('success1','Image Changed Succesfully');
                                    
                        redirect('admin/Profile');

                        
                }
           
           }

        }
        
    }
    

?>