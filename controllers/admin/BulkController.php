<?php 
class BulkController extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('admin/Import_model', 'import');
    }
    
    function index(){
     
        $this->load->view('admin/bulkproduct');
    }
    
    function store(){
            $this->load->helper('download');
                 
                $path = 'admin-assets/uploads/bulk/';
                require_once APPPATH . "/third_party/PHPExcel.php";
               
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                        
                       $product_title = $this->urlSafeString($value['A']);
                        
                      if($flag){
                        $flag =false;
                        continue;
                      }
                        if($value['A'] != ""){
                            $inserdata[$i]['product_title'] = $product_title;
                            $inserdata[$i]['pname'] = $value['B'];
                            $inserdata[$i]['price'] = $value['C'];
                            // $inserdata[$i]['discount'] = $value['D'];
                            $inserdata[$i]['model_no'] = $value['D'];
                            $inserdata[$i]['part_code'] = $value['E'];
                            $inserdata[$i]['overview'] = $value['F'];
                            $inserdata[$i]['category'] = $value['G'];
                            $inserdata[$i]['sub_category'] = $value['H'];
                            $inserdata[$i]['child_sub_cat_id'] = $value['I'];
                            $inserdata[$i]['image'] = $value['J'];
                            $inserdata[$i]['sales'] = $value['K'];
                            $inserdata[$i]['product_overview'] = $value['L'];
                            $inserdata[$i]['specifications'] = $value['M'];
                            $inserdata[$i]['models'] = $value['N'];
                            $inserdata[$i]['resources'] = $value['O'];
                            $inserdata[$i]['accessories'] = $value['P'];
                            // image download and save in server path 
                            if($value['H'] != ""){
                                if($value['J'] != ""){
                                    
                                
                                $img = explode(',',$value['J']);
                                if($img > 0){
                                    $imageNamee = ""; 
                                    foreach($img as $key => $valImage){
                                        $imgurl = trim($valImage," "); ; 
                                        $imagename= basename($imgurl);
                                        $imageNamee.= $imagename.",";
                                        if(file_exists('assets/images/products/'.$imagename))
                                        {
                                            continue;
                                            
                                        }else{
                                            echo "Please currect this image path";
                                        }
                                        $image = file_get_contents($valImage);
                                        file_put_contents('assets/images/products/'.$imagename,$image);
                                        
                                    }
                                    $properImage = rtrim($imageNamee, ',');
                                }
                                $inserdata[$i]['image'] = $properImage;
                                }
                            }
                            $i++;
                        }
                      
                    }        
                    //print_r($inserdata);
                    //die();
                    
                    
                    $result = $this->import->importData($inserdata);
                    //$this->addVariant();
                    if($result){
                        $this->session->set_flashdata('success','Bulk Product uploaded succesfully!');
                      redirect('admin/BulkController');
                    }else{
                      echo "ERROR !";
                    }             
                    $this->session->set_flashdata('success','Bulk Product uploaded succesfully!');
                      redirect('admin/BulkController');
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
            //   print_r("check");die();
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        
        
        function addVariant($pid,$color,$img){
            $formArray['pid'] = $pid;
            $formArray['color'] = $color;
            $formArray['colorcode'] = $color;
            $formArray['images'] = $img;
            $this->db->insert('color',$formArray);
        }
        
        function urlSafeString($string)
        {   
            $mystr = str_replace("-","_",strtolower($string));
            $cleanString = preg_replace('/[^A-Za-z0-9\-]/',' ',$mystr);
            return $cleanString;
        }
    
} 


?>