<?php 
class Variation extends CI_Controller
{
 
    function  __construct(){
        parent:: __construct();
        $this->load->model('admin/Import_model', 'import');
    }   
    
    function index(){
        
    }
    
    function addVariation(){
        $product = $this->db->get('products');
        $data['product'] = $product->result_array();
        $color = $this->db->query("select a.*,b.pname from color as a left join products as b on b.id=a.pid ORDER BY a.id desc");
        $data['colorData'] = $color->result_array();
        //print_r($data['colorData']);die();
        $this->load->view('admin/variation/addvariation',$data);
    }
    
    function variDeleteInd(){
        $id = $this->input->post('id');
        $fullArr = $this->input->post('fullArr');
        
         $imG = implode(",", $fullArr);
        
        $variaton['images'] = $imG;
        
        $this->db->where('id', $id);
        $this->db->update('color', $variaton);
    }
    
    function variDelete(){
        $id = $this->input->post('id');
        $this->db->where('id',$id); 
        $this->db->delete('color');
        // print_r('DELETE FROM color WHERE id='.$id.'');die();
        //redirect('admin/variation/Variation/mediaPage');
    }
    
    function mediaPage(){
        $color = $this->db->query("select a.*,b.pname, b.id as product_id from color as a left join products as b on b.id=a.pid ORDER BY a.id desc");
        $data['colorData'] = $color->result_array();
        $this->load->view('admin/variation/media',$data);
    }
    
   
    
    function store(){
        
        $imageUrl = $this->input->post('imageUrl');
        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d H:i:s');
        $data = [];

        $count = count($_FILES['files']['name']);
        if($count > 0 && $imageUrl == ""){
            $allimages="";
            for($i=0;$i<$count;$i++){
                if(!empty($_FILES['files']['name'][$i])){
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                    $config['upload_path'] = 'assets/images/product/'; 
                    $config['allowed_types'] = '*';
                    $config['file_name'] = $_FILES['files']['name'][$i];
                    $this->load->library('upload',$config); 
                    if($this->upload->do_upload('file')){
                      $uploadData = $this->upload->data();
                      $filename = $uploadData['file_name'];
                      $allimages.=$filename.',';
                    //   $data['totalFiles'][] = $filename;
                    }
                }
            }
            $productiages = rtrim($allimages,",");
        }else{
            $img = explode(',',$imageUrl);
            if($img > 0){
                $imageNamee = ""; 
                foreach($img as $key => $valImage){
                    $imgurl = $valImage; 
                    $imagename= basename($imgurl);
                    $image = file_get_contents($valImage);
                    file_put_contents('assets/images/product/'.$imagename,$image);
                    $imageNamee.= $imagename.",";
                }
                $properImage = rtrim($imageNamee, ',');
            }
            $productiages = $properImage;
        }
        //print_r($productiages);die();
        
        $formArray['pid'] = $this->input->post('product');
        $formArray['color'] = $this->input->post('colorcode');
        $formArray['colorcode'] = $this->input->post('color');
        $formArray['images'] = $productiages;
        $formArray['created_date'] = $date;
        $this->db->insert('color',$formArray);
        $this->session->set_flashdata('success','Color added Succesfully');
        redirect('admin/variation/Variation/addVariation');
        
    }
    
    function bulk_store(){
        
        //print_r("gbyb");die();
        $path = 'admin-assets/uploads/bulk/';
        require_once APPPATH . "/third_party/PHPExcel.php";
               
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);            
        if(!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
        if(empty($error)){
            if(!empty($data['upload_data']['file_name'])) {
                $import_xls_file = $data['upload_data']['file_name'];
            }else{
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
                    if($flag){
                        $flag =false;
                        continue;
                    }
                    if($value['A'] != ""){
                        $inserdata[$i]['pid'] = $value['A'];
                        $inserdata[$i]['color'] = $value['B'];
                        
                        
                        $img = explode(',',$value['C']);
                        if($img > 0){
                            $imageNamee = ""; 
                            foreach($img as $key => $valImage){
                                $imgurl = $valImage; 
                                $imagename= basename($imgurl);
                                // if(file_exists('assets/images/product/'.$imagename)){continue;}
                                $image = file_get_contents($valImage);
                                file_put_contents('assets/images/product/'.$imagename,$image);
                                $imageNamee.= $imagename.",";
                            }
                                $properImage = rtrim($imageNamee, ',');
                        }
                        $inserdata[$i]['images'] = $properImage;
                        $i++;
                    }
                }        
                    
                   // die();
                $result = $this->import->importDataVariation($inserdata);
                if($result){
                    $this->session->set_flashdata('success','Bulk Variation uploaded succesfully!');
                    redirect('admin/variation/Variation/addVariation');
                }else{
                    echo "ERROR !";
                }             
      
            }catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME). '": ' .$e->getMessage());
            }
        }else{
            echo $error['error'];
        }
    }
    
    
    function exportData(){
        $product = $this->db->get('color');
        $variations =$product->result_array();
        $delimiter=",";
        $fields = array("product_id","color","image_url");
        $f = fopen( 'php://output', 'w' );
        fputcsv($f,$fields,$delimiter);
        $i=1; 
        foreach($variations as $variation){
            $imageArr = explode(",",$variation['images']);
            $fullImgUrl = "";
            foreach($imageArr as $key => $value){
                $fullImgUrl .=  base_url('assets/images/product/').$value.",";
            }
            $properImage = rtrim($fullImgUrl, ',');
            
            $lineData = array($variation['pid'],$variation['color'],$properImage);    
            fputcsv($f,$lineData,$delimiter);
            $i++;
        }
        // die();
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=Variation.csv');
        fpassthru($f);
    }
    
    
    function mediaExport(){
        $this->load->library('excel');
        $objPHPExcel = new PHPExcel();
         
        $objPHPExcel->setActiveSheetIndex(0);
        
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'product_id');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'color');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'color_name');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'image_url');
        $product = $this->db->get('color');
         $variations =$product->result_array();
        $i=2; 
        foreach($variations as $variation){
            $imageArr = explode(",",$variation['images']);
            $fullImgUrl = "";
            foreach($imageArr as $key => $value){
                $fullImgUrl .=  base_url('assets/images/product/').$value.",";
            }
            $properImage = rtrim($fullImgUrl, ',');
            
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $i, $variation['pid']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $i, $variation['color']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $i, $variation['colorcode']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $i, $properImage);
            
            $i++;
        }
        
        $filename = "Media". date("Y-m-d-H-i-s").".csv";
        
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output');
    }
    
    function getProducts(){
        $pid = $this->input->post('pid');
        $this->db->where('id',$pid);
        $product = $this->db->get('color');
        $data['prdt'] =$product->result_array(); 
        $imagesss = $data['prdt'][0]['images'];
        $imageskkh = explode(",",$imagesss);
        $data['images'] = $imageskkh[0];
        echo json_encode($data);
    }
    
}