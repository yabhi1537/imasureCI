<?php 

class Singleproduct extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Homemodel');
        $this->load->model('Wishingmodel');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Pagesmodel');
    }



    public function index(){
         $pagename = $this->uri->segment(1);
         
         
        //  print_r($pagename);die();
       // $pagename= str_replace("-"," ",$this->uri->segment(1));
        
        // print_r($pagename);x
        
        if($pagename=="singleproduct"){
            $data['pagename'] =  $this->Pagesmodel->getPages($pagename);
        }
        
        $data['category'] =  $this->Wishingmodel->getCategory();
        $productid = $this->uri->segment(2);
        
       // print_r($productid);die();
        $replace =    str_replace("-"," ",$productid);
       
        $userid = $this->session->userdata('id');
        $singleproduct = $this->Homemodel->getSingleproduct($replace);
        $str = $this->db->last_query();
   
    // echo "<pre>";
    // print_r($str);
        
    //     //print_r($singleproduct);
    //     die();
        
        $signleid = $singleproduct[0]['id'];
        $subcatid = $singleproduct[0]['sub_category'];
        $categoryid = $singleproduct[0]['category'];
        $category = $this->Homemodel->getCategory($categoryid);
        $categoryname = $category[0]['catname'];
       
        $data['categorynamedata'] = $this->Homemodel->getCategoryname($categoryname);
       
        
        // $this->db->where('sub_category',$subcatid);
        // $subcategory =  $this->db->get('products');
        
        // echo 'SELECT * FROM products WHERE category= "'.$subcatid.'" AND  id NOT IN ("'.$signleid.'")';
        // die();
        $subcategory =  $this->db->query('SELECT * FROM products WHERE category= "'.$categoryid.'" AND  id NOT IN ("'.$signleid.'") LIMIT 4');
        $data['subcate'] = $subcategory->result_array();

       
        
        // print_r($data['subcate']);die();
        $signlename = $singleproduct[0]['pname'];
        // print_r($signleid);die();
        $this->db->where('pid',$signleid);
        $colotse = $this->db->get('color');
        $data['colors'] = $colotse->result_array();
        // print_r($data['colors']);die();
        //print_r($signleid);die();
        $this->db->where('pid',$signleid);
        $reviews = $this->db->get('review');
        $data['review'] = $reviews->result_array();
        $ratings = $this->Homemodel->getSumvalues($signleid);
        $totalratin = $ratings[0]['ratingss'];
        if(!empty($totalratin)){ 
            $getCount = $this->Homemodel->getCount($signleid);
            $data['mincount'] = $totalratin/$getCount;
        }
        $data['singleproduct'] = $singleproduct;
        $data['features'] = $this->Homemodel->getProductfeature($signleid);
        $data['delivery'] = $this->Homemodel->getDeliverycont($signleid);
        $data['warrenty'] = $this->Homemodel->getWarrenty($signleid);
        $data['desc'] = $this->Homemodel->getDesciption($signleid);
       // print_r($data['desc']);die();
        $data['wishlist'] = $this->Wishingmodel->getWishlist($signleid,$userid);
        // print_r($data['singleproduct']);
        // die();
        $this->load->view('single-product',$data);
    }

    public function addCard(){
        $date =  date('Y-m-d H:i:s');
        $name =  $this->input->post('name');
        $hidenid =  $this->input->post('hidenid');
        $email =  $this->input->post('email');
        $mobile =  $this->input->post('mobile');
        $address =  $this->input->post('address');
        $hidurl = $this->input->post("hidurl");
        $proname = $this->input->post("hdnProName");
        $hdnProTitle = $this->input->post("hdnProTitle");
        

        //$this->SendConfigMail($hdnProTitle,$proname,$name,$email,$mobile,$address);
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
    
     function SendConfigMail($hdnProTitle,$proname,$name,$email,$mobNum,$message){
        $this->load->library('email');
        $html = "<table style='border: 1px solid;'>
             <tr>
                <td>Product Name : </td>                    
                <td> ".$proname." </td>
            </tr>
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
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.atzean.com';
            $config['smtp_user'] = 'sonusharma@atzean.com';
            $config['smtp_pass'] = 'x%r_NLXp3?Aj';
            $config['smtp_port'] = 587;
            $config['newline'] = "\r\n";
            $this->email->initialize($config);
            // $this->email->set_newline("\r\n");
            $this->email->from("sonusharma28375@gmail.com", 'Identification');
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
             $prnameurl = strtolower(str_replace(" ","-",$hdnProTitle));
            //redirect('singleproduct/'.$prnameurl);
    }

    
    function sendMail($proname,$name,$email,$mobNum,$message){
        $this->load->library('Phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host     = "mail.atzean.com";
        $mail->Username = "sonusharma@atzean.com";
        $mail->Password = "x%r_NLXp3?Aj";
        $mail->SMTPSecure = 'ssl';                                                                  
        $mail->Port     = "587";
        $mail->setFrom("sonusharma@atzean.com", "Horizon Computer");
        $mail->Subject = "Horizon Computer";
        $mail->addAddress("sonusharma28375@gmail.com");
            
        $html = "<table>
             <tr>
                <td>Product Name : </td>                    
                <td> ".$name." </td>
            </tr>
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
    
    public function getRatings(){
        $date =  date('Y-m-d H:i:s');
        $formArray['name'] = $this->input->post('name');
        $formArray['rating'] = $this->input->post('rating');
        $formArray['review'] = $this->input->post('review');
        $formArray['pid'] = $this->input->post('pid');
        $formArray['created_at'] = $date;
        $this->db->insert('review',$formArray);
    }
    
    function getProducts(){
        $pid = $this->input->post('pid');
        $pidself = $this->input->post('pidself');
        if($pid=='0000'){
            $this->db->where('id',$pidself);
            $product = $this->db->get('products');
            $data['prdt'] =$product->result_array();
             $imagesss = $data['prdt'][0]['image'];
        }else{
            $this->db->where('id',$pid);
            $product = $this->db->get('color');
            $data['prdt'] =$product->result_array();
            $imagesss = $data['prdt'][0]['images'];
        }
        // print_r($pid);
        // die();
        
        
        $imageskkh = explode(",",$imagesss);
        $imageskkh;
        
      //  print_r($imageskkh);die();
        
        $html = '
      
        <div class="col-lg-12">
                    <div  id="bigImage"class="slick-track product-large-thumbnail-2 single-product-thumbnail axil-product slick-layout-wrapper--15 axil-slick-arrow arrow-both-side-3">
                        <div class="slick-list">
                            <div class="slick-track ">
                            ';
                        
                                $html.= '<div class="thumbnail text-center">
                                    <img id="signleImg" src="'. base_url('assets/images/product/'). $imageskkh[0] .'" alt="Product Images">
                                </div>
                                ';
                                // $i++;
                           // } 
                            $html    .= '
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="multipleImg"  class="slick-slider small-thumb-wrapper product-small-thumb-2 small-thumb-style-two small-thumb-style-three">
                        ';
                        $i=0;
                        foreach($imageskkh as $key => $value){
                            if($i==0){
                                $imgActive = "imgActive";
                            }else{
                                $imgActive = "";
                            }
                            $html .= '<div class="small-thumb-img ">
                                <input type="hidden" id="hdnImg['.$i.']" name="hdnImg['.$i.']" value="'.$value.'"/>
                                <img onclick="getImage('.$i.')" class="actv '.$imgActive.'" id="actv'.$i.'"  src="'. base_url('assets/images/product/'). $value .' " alt="samll-thumb">
                            </div>';
                            $i++;
                        }
                        $html .='
                    </div>
                </div>';
        
        $data['html'] = $html;
        //print_r($html);die();
        echo json_encode($data);
    }
    
}


?>