<?php 

    class Productfeatures extends CI_Controller
    {
        function __construct()
        {
            parent:: __construct();
            $this->load->model('admin/product/Productfeatresmodel');
        }

        public function index(){
            $data['features'] = $this->Productfeatresmodel->getFeatures();
           
            $this->load->view('admin/product/features',$data);
        }

        public function addfeatures(){

            $data['features'] = $this->Productfeatresmodel->getProductname();
            if(isset($_POST['submit'])){
            $prodctss  = $this->input->post('prodctss');
            $hdn_id  = $this->input->post('hdn_id');
          
            foreach ($hdn_id as $key => $value) {

                $featutes = $this->input->post('featutes')[$key];
                
                $formArray['productid'] = $prodctss;
                $formArray['feature'] = $featutes;
                $this->db->insert('product_features',$formArray);
            }
            redirect('admin/product/Productfeatures/addfeatures');
        }
            $this->load->view('admin/product/addfeatures',$data);


        }

        public function Deletefeats(){

          $featureid =   $this->uri->segment(5);

          $this->db->where('id',$featureid);
          $this->db->delete('product_features');
          $this->session->set_flashdata('success','Deleted Succesfully');
          redirect('admin/product/Productfeatures');

        }

        
    }
    


?>