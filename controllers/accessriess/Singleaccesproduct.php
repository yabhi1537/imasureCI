<?php 

class Singleaccesproduct extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Homemodel');
        $this->load->model('Wishingmodel');
        $this->load->model('Accessoriesmodel');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Pagesmodel');

    }



    public function index(){
         $pagename = $this->uri->segment(2);
        if($pagename=="singleaccesproduct"){
        $data['pagename'] =  $this->Pagesmodel->getPages($pagename);
      
        }
     
        $data['category'] =  $this->Wishingmodel->getCategory();
        $productid = $this->uri->segment(3);
      
      // print_r($productid);die();
        $replace =    str_replace("-"," ",$productid);
        
        $userid = $this->session->userdata('id');
        
        
        $singleproduct = $this->Accessoriesmodel->getSingleproduct($replace);
       
        $signleid = $singleproduct[0]['id'];
         $category = $singleproduct[0]['category'];
       
    //   $this->db->where('sub_category',$subcatid);
    //   $subcategory =  $this->db->get('products');
    //   $data['subcate'] = $subcategory->result_array();
       
    //     $signlename = $singleproduct[0]['pname'];
       
    //     $this->db->where('pname',$signlename);
    //     $colotse = $this->db->get('products');
    //     $data['colors'] = $colotse->result_array();
        
        $data['singleproduct'] = $singleproduct;
        $data['features'] = $this->Homemodel->getProductfeature($signleid);
        $data['delivery'] = $this->Homemodel->getDeliverycont($signleid);
        $data['warrenty'] = $this->Homemodel->getWarrenty($signleid);
        $data['desc'] = $this->Homemodel->getDesciption($signleid);
        $subcategory =  $this->db->query('SELECT * FROM accesories WHERE category= "'.$category.'" AND  id NOT IN ("'.$signleid.'") LIMIT 4');
        $data['subcate'] = $subcategory->result_array();
        // $data['wishlist'] = $this->Wishingmodel->getWishlist($signleid,$userid);
     //   print_r($data['singleproduct']);
    
        $this->load->view('accessries/single-product',$data);

    }

    public function addCard(){
    $date =  date('Y-m-d H:i:s');
    $name =  $this->input->post('name');
    $hidenid =  $this->input->post('hidenid');
    $email =  $this->input->post('email');
    $mobile =  $this->input->post('mobile');
    $address =  $this->input->post('address');
    $hidurl = $this->input->post("hidurl");

    // $this->sendMail($name,$email,$mobile,$address);
    $formArray['name'] = $name;
    $formArray['email'] = $email;
    $formArray['address'] = $address;
    $formArray['contact_no'] = $mobile;
    $formArray['pid'] = $hidenid;
    $formArray['created_at'] = $date;
    $this->db->insert('inquery',$formArray);
    $this->session->set_flashdata('success','Request Sent Succesfully');
    if($hidurl == 1){
        redirect('Home');
    }else{
        redirect('Singleproduct/'.$hidenid);
    }

    }
    
    
    function sendMail($name,$email,$mobNum,$message){
        $this->load->library('Phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host     = "smtp.gmail.com";
        $mail->Username = "tommythomas8644@gmail.com";
        $mail->Password = "lpjotpucncglrdog";
        $mail->SMTPSecure = 'ssl';                                                                  
        $mail->Port     = "465";
        $mail->setFrom("tommythomas8644@gmail.com", "Horizon Computer");
        $mail->Subject = "Horizon Computer";
        $mail->addAddress("sonusharma28375@gmail.com");
            
        $html = "<table>
            <tr>
                <td>Name : </td>                    
                <td> ".$name." </td>
            </tr>
            <tr>                                                                            
                <td>Email </td>
                <td>".$email."</td>
            </tr>
            <tr>
                <td>Mobile Number : </td>
                <td>".$mobNum."</td>
            </tr>
            <tr>
                <td>Message : </td>
                <td>".$message." </td>
            </tr>
            </table>";
        
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


    public function sabCategory(){


        $catid = $this->input->post('catid');
       
        $cat = $this->Wishingmodel->getSubcategory($catid);
        $output = '<ul class="list-unstyled d-flex justify-content-between">';
        foreach($cat as $subcat){

            $output.=  '<li class="subcategort"> <img style="max-width: 100%; max-height: 100%;" src="'.base_url('admin-assets/uploads/subcategory/').''.$subcat['image'].'">
            <p style="color:white;">'.$subcat['subcat'].'</p>
            </li>';
            // $output.=  '<li  >'.$subcat['subcat'].'</li>';

        } 
        $output.='</ul>';  
        echo $output;
       

    }
    
    public function Category(){
        $data['category'] =  $this->Wishingmodel->getCategory();
        $catname = $this->uri->segment(4);
        $data['catetorydata'] = $this->Accessoriesmodel->getCategorydata($catname);
       
        $this->load->view('accessries/accessoriescategory',$data);
    }
    
    
}


?>