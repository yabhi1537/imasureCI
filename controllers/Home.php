<?php 
use PHPMailer\PHPMailer\PHPMailer;
class Home extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Homemodel');
        $this->load->model('Wishingmodel');
    }


    public function index(){
        $data['category'] =  $this->Wishingmodel->getCategory();
        $data['products'] = $this->Homemodel->getProducts();
        $data['featuredPro'] = $this->Homemodel->getIpad();
        $data['bloglist']  =  $this->Homemodel->getBlogs();
        $data['brandslist']  =  $this->db->get('brands')->result_array();
        // print_r($data['products']);die();
        //print_r($data['featuredPro']);die();
        // $data['mobiles'] = $this->Homemodel->getMobilcate();
        // $data['iphone'] = $this->Homemodel->getIphone();

      
        $this->load->view('index',$data);

    }
    
    function about(){
        $this->load->view('includes/header');
        $this->load->view('aboutus');
        $this->load->view('includes/footer');
    }
    function contact(){
        $this->load->view('includes/header');
        $this->load->view('contact');
        $this->load->view('includes/footer');
    }
    
    function blog(){
        
        $this->load->model('admin/Homemodel');
        $data['bloglist']  =  $this->Homemodel->getBlogs();
        $this->load->view('includes/header');
        $this->load->view('blog',$data);
        $this->load->view('includes/footer');
    }
    
     function blog_details(){
         
        $id = $this->uri->segment(2);
        $this->load->model('admin/Homemodel');
        $data['blog']  =  $this->Homemodel->getBlog($id);
        //  print_r($data['blog']);die();
        $this->load->view('includes/header');
        $this->load->view('blog_details',$data);
        $this->load->view('includes/footer');
    }
    
    
    public function searchFilter(){
       $product = $this->input->post('product'); 
       $filter =  $this->Wishingmodel->getSearching($product);
       
       $filtercount = count($filter);
       $output="";
       
        foreach($filter as $serach){
            $image = explode(',', $serach['image']);
            $proUrl = $string = strtolower(str_replace(' ', '-', $serach['product_title']));
            $output.='<div class="row axil-product-list  align-items-center " style="justify-content: center">';      
              
            $output.='<div class="col-md-3 thumbnail">
                <a href="'.base_url('product/'.$proUrl).'">
                    <img style="height: 50px;" src="'.base_url('assets/images/products/').$image[0].'"
                        alt="Yantiti Leather Bags" >
                </a>
                </div>';      
            $output.= '<h6 class="col-md-6 product-title"><a href="'.base_url('product/'.$proUrl).'">'. $serach['pname'].'</a></h6>
                    <div class="col-md-3 product-price-variant">
                        
                        
                    </div>
                </div>';
        
        }
        
        // echo  $output;
        // echo $filtercount;
        $data['filtercount'] = $filtercount;
        $data['output'] = $output;
        
        echo json_encode($data);
        
    }
    
    public function getSubscribe(){
        
      $email = $this->input->post('email');
      
      $this->load->library('phpmailer_lib');
        
      // PHPMailer object
      $mail = $this->phpmailer_lib->load();


      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->Host     = "smtp.gmail.com";
      $mail->Username = "tommythomas8644@gmail.com";
      $mail->Password = "lpjotpucncglrdog";
      $mail->SMTPSecure = 'TLS';                                                                  
      $mail->Port     = "587";
      $mail->setFrom("tommythomas8644@gmail.com", "Horizon Computer");
      $mail->Subject = "Horizon Computer";
      $mail->addAddress("astral.abhi2000@gmail.com");
          
      $html = "<h1>Thanks for Subscibing Horizon Computer</h1>";
      
      $mail->Body =  $html;
      $mail->SMTPDebug = 1;
      $mail->isHTML(true);
      //   print_r($mail);die();

      if(!$mail->send()) {
          echo 'Message could not be sent.';

          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }  
      
    }

    public function branch(){
        $data['brandslist']  =  $this->db->get('brands')->result_array();
        $this->load->view('branch',$data);

    }
    
}


?>