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
                $config['allowed_types'] = 'csv|xls|xlsx';
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
                        // print_r($value);die();
                      if($flag){
                        $flag =false;
                        continue;
                      }
                        if($value['A'] != ""){
                            $inserdata[$i]['product_title'] = $value['A'];
                            $inserdata[$i]['pname'] = $value['B'];
                            $inserdata[$i]['qty'] = $value['C'];
                            $inserdata[$i]['price'] = $value['D'];
                            $inserdata[$i]['discount'] = $value['E'];
                            $inserdata[$i]['category'] = $value['F'];
                            $inserdata[$i]['sub_category'] = $value['G'];
                            $inserdata[$i]['sub_category_min'] = $value['H'];
                            $inserdata[$i]['description'] = $value['J'];
                            $inserdata[$i]['feature'] = $value['K'];
                            $inserdata[$i]['color'] = $value['L'];
                            $inserdata[$i]['warrenty'] = $value['M'];
                            $inserdata[$i]['delivery'] = $value['N'];
                            $inserdata[$i]['item_type'] = $value['O'];
                            // image download and save in server path 
                            if($value['I'] != ""){
                                $img = explode(',',$value['I']);
                                if($img > 0){
                                    $imageNamee = ""; 
                                    foreach($img as $key => $valImage){
                                        $imgurl = trim($valImage," "); 
                                        $imagename= basename($imgurl);
                                        if(file_exists('assets/images/product/'.$imagename))
                                        {
                                            continue;
                                            
                                        }else{
                                            echo "Please currect this image path";
                                        }
                                        $image = file_get_contents($valImage);
                                        file_put_contents('assets/images/product/'.$imagename,$image);
                                        $imageNamee.= $imagename.",";
                                    }
                                    $properImage = rtrim($imageNamee, ',');
                                }
                                $inserdata[$i]['image'] = $properImage;
                            }
                            $i++;
                        }
                    }        
                    
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
               //print_r("check");die();
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
} 


?>