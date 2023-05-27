<?php
class ProductController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('admin/product/Productmodel');
    }

    function index(){
        $data['product'] = $this->Productmodel->getProduct();
        $this->load->view('admin/product/product',$data);
    }

    public function addProduct(){
        $data['category'] = $this->Productmodel->getCategories();
        $data['subcategory'] = $this->Productmodel->getSubcategories();
        $data['childsubcategory'] = $this->Productmodel->getChildSubcategories();
        if(isset($_POST['submit'])){
            $colors = $this->input->post('colorcode');
            //$adnither = $this->addAnother();
            //   $eplodecolto = explode(",",$allcoloesima);
            $description   =   $this->input->post('description');
            $descrt ="";
            if(!empty($description)){
                
            foreach ($description as $key => $value) {
                $descrt.=$value."|";
            }
            }
            $desctrim = rtrim($descrt,"|");
            $feature   =   $this->input->post('featutes');
            $allfatures="";
            if(!empty($feature)){
                
            foreach($feature as $key => $features){
                $allfatures.= $features."|";
            }
            }
            $featuretrim = rtrim($allfatures,"|");
            // $delivery   =   $this->input->post('delivery');
            // $alldelivery="";
            // foreach($delivery as $key => $deliveues){
            //     $alldelivery.= $deliveues."|";
            // }
            // $deliverytrim = rtrim($alldelivery,"|");
            // $warrent   =   $this->input->post('warrenty');
            // $allwarrenty="";
            // foreach($warrent as $key => $warenties){
            //     $allwarrenty.= $warenties."|";
            // }
            // $rrimvarrent = rtrim($allwarrenty,"|");
            date_default_timezone_set('Asia/Kolkata');
            $date =  date('Y-m-d H:i:s');
            $pname = $this->input->post('productname');
            $qty = $this->input->post('qty');
            $price = $this->input->post('price');
            $discount =$this->input->post('discount');
            $category =$this->input->post('category');
            $resources = $this->input->post('editor1');
            $model_no = $this->input->post('modelNo');
            $part_code = $this->input->post('partCode');
            $overview = $this->input->post('overview');
            $subcategory = $this->input->post('subcategory');
            
        //    print_r($subcategory);die();
            $producttitle = $this->input->post('producttitle');
            $sale = $this->input->post('sale');
            $featured_product = $this->input->post('featured_product');
            $data = [];
            $count = count($_FILES['files']['name']);
            $allimages="";
            //    print_r($_FILES);die();
            for($i=0;$i<$count;$i++){
                if(!empty($_FILES['files']['name'][$i])){
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                    $config['upload_path'] = "assets/images/product/"; 
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
            $allcolro ="";
            if(!empty($colors)){
                
            foreach($colors as $key => $value){
                // $allcolro.=$value.",";
                $allcolro.= $value.",";
            }
            }
            $allcoloesima = rtrim($allcolro,",");
            
           
            $pro_overview = $this->input->post('Product_overview');
             $Specifications = $this->input->post('Specifications');
            $Models = $this->input->post('Models');
            $Accessories = $this->input->post('Accessories');
            $childSubCatId = $this->input->post('childSubCatId');
            // print_r($allcoloesima);die();
            $productTitle = $this->urlSafeString($producttitle);
            $productiages = rtrim($allimages,",");
            $formArray = array();
            $formArray['pname'] = $pname;
            $formArray['qty'] = $qty;
            $formArray['discount'] = $discount;
            
            $formArray['price'] = $price;
            $formArray['sub_category'] = $subcategory;
            $formArray['product_title'] = $productTitle; 
            $formArray['category'] = $category;
            $formArray['child_sub_cat_id'] = $childSubCatId;
            $formArray['image'] = $productiages;
            $formArray['sales'] = $sale;
            $formArray['color'] = $allcoloesima;
            // $formArray['description'] = $desctrim;
            $formArray['feature'] = $featuretrim;
            // $formArray['warrenty'] = $rrimvarrent;
            // $formArray['delivery'] = $deliverytrim;
            $formArray['resources'] = $resources;
            $formArray['model_no'] = $model_no;
            $formArray['part_code'] = $part_code;
            // $formArray['featured_product'] = $featured_product;
            $formArray['overview'] = $overview;
            $formArray['product_overview'] = $pro_overview;
            $formArray['specifications'] = $Specifications;
            $formArray['models'] = $Models;
            $formArray['accessories'] = $Accessories;
            $formArray['created_at'] = $date;
            
            // print_r($formArray);die();
            $this->db->insert('products',$formArray);
            $pid = $this->db->insert_id();
            
            $this->session->set_flashdata('success','Product Save Succesfully');
            redirect('admin/product/ProductController');
        }else{
            $this->load->view('admin/product/addProduct',$data);
        }
    }
    
    function getChildSubcategory(){
        $subid = $this->input->post('id');
        $subcateg = $this->Productmodel->getChildSubcategories($subid);
        echo json_encode($subcateg); 
    }
    
     function urlSafeString($string)
        {   
            $mystr = str_replace("-","_",strtolower($string));
            $cleanString = preg_replace('/[^A-Za-z0-9\-]/',' ',$mystr);
            return $cleanString;
        }

    public function delProduct(){
        $productid = $this->uri->segment(5);
        $this-> db->where('id', $productid);
        $this->db->delete('products');
        $this->session->set_flashdata('success','Product Deleted Successfully');
        redirect('admin/product/ProductController');
    }
    
    function updateVariation(){
            $variationID = $this->input->post('variationID');
            $colorname = $this->input->post('colorname');
            $colorcode = $this->input->post('colorcode');
            $modelimageUrl = $this->input->post('modelimageUrl');
            $varProID = $this->input->post('varProID');
            $redirectUrl = $this->input->post('redirectUrl');
            
            $count = count($_FILES['files']['name']);
            $allimages="";
            //    print_r($_FILES);die();
            for($i=0;$i<$count;$i++){
                if(!empty($_FILES['files']['name'][$i])){
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                    $config['upload_path'] = "assets/images/product"; 
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
            
            $productiages = rtrim($allimages.$modelimageUrl,",");
            // print_r($productiages);die();
        $formArray['color'] = $colorcode;
        $formArray['images'] = $productiages;
        $formArray['colorcode'] = $colorname;
        if($variationID != ""){
            $this->db->where('id', $variationID);
            $this->db->update('color', $formArray);
        }else{
            $formArray['pid'] = $varProID;
       // print_r($formArray);
            $this->db->insert('color',$formArray);
        }
        
        redirect($redirectUrl);
    }

    public function editProduct(){
        $productid = $this->uri->segment(5);
        $data['subcategory'] = $this->Productmodel->getSubcategories();
        $data['products'] = $this->Productmodel->getProductbyid($productid);
        $data['category'] = $this->Productmodel->getCategories();
        $data['color'] = $this->Productmodel->getColorImg($productid);
      
     
        if(isset($_POST['submit'])){
            //print_r($_POST);die();
            //print_r($productid);die();
            // $description   =   $this->input->post('description');
            
            // $descrt ="";
            // foreach ($description as $key => $value) {
            //     $descrt.=$value."|";
            // }
            
            // $desctrim = rtrim($descrt,"|");
          
            // $feature   =   $this->input->post('featutes');
            // $allfatures="";
            // foreach($feature as $key => $features){
            //     $allfatures.= $features."|";
            // }
            // $featuretrim = rtrim($allfatures,"|");
            // $delivery   =   $this->input->post('delivery');
            // $alldelivery="";
            // foreach($delivery as $key => $deliveues){
            //     $alldelivery.= $deliveues."|";
            // }
            // $deliverytrim = rtrim($alldelivery,"|");
            // $warrent   =   $this->input->post('warrenty');
            // $allwarrenty="";
            // foreach($warrent as $key => $warenties){
            //     $allwarrenty.= $warenties."|";
            // }
            // $rrimvarrent = rtrim($allwarrenty,"|");
            date_default_timezone_set('Asia/Kolkata');
            $date =  date('Y-m-d H:i:s');
            $pname = $this->input->post('productname');
            $qty = $this->input->post('qty');
            $price = $this->input->post('price');
            $discount =$this->input->post('discount');
            $category =$this->input->post('category');
            $descripti = $this->input->post('description');
            $subcategory = $this->input->post('subcate');
            $color  =$this->input->post('color');
            $hdnimage  =$this->input->post('hdnimage');
            $sale = $this->input->post('sale');
            $featured_product = $this->input->post('featured_product');
            $producttitle = $this->input->post('producttitle');
            $model_no = $this->input->post('modelNo');
            $part_code = $this->input->post('partCode');
            $overview = $this->input->post('overview');
            $resources = $this->input->post('editor1');
            $imageeee = $_FILES['files']['name'][0];
            if($imageeee!=""){
                $data = [];
                $count = count($_FILES['files']['name']);
                $allimages="";
       
                for($i=0;$i<$count;$i++){
                    if(!empty($_FILES['files']['name'][$i])){
                        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                        $config['upload_path'] = "assets/images/products"; 
                        $config['allowed_types'] = '*';
                        $config['file_name'] = $_FILES['files']['name'][$i];
                        $this->load->library('upload',$config); 
                        if($this->upload->do_upload('file')){
                            $uploadData = $this->upload->data();
                            $filename = $uploadData['file_name'];
                            $allimages.= $filename.',';
                            //   $data['totalFiles'][] = $filename;
                            // echo "gfg";
                        }else{
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                        }
                    }
                }
                $productiages = rtrim($allimages.$hdnimage,",");
            }else{
                $productiages = $hdnimage;
            }
            
            $pro_overview = $this->input->post('Product_overview');
            $Specifications = $this->input->post('Specifications');
            $Models = $this->input->post('Models');
            $Accessories = $this->input->post('Accessories');
            $childSubCatId = $this->input->post('childSubCatId');

            //  print_r($productiages);die();
            $productTitle = $this->urlSafeString($producttitle);
            $formArray = array();
            $formArray['child_sub_cat_id'] = $childSubCatId;
            $formArray['product_title'] = $productTitle; 
            $formArray['pname'] = $pname;
            $formArray['qty'] = $qty;
            $formArray['discount'] = $discount;
            $formArray['price'] = $price;
            $formArray['sales'] = $sale;
            $formArray['category'] = $category;
            $formArray['sub_category'] = $subcategory;
            $formArray['color'] = $color;
            $formArray['image'] = $productiages;
           
            $formArray['model_no'] = $model_no;
            $formArray['part_code'] = $part_code;
            $formArray['overview'] = $overview;
            $formArray['product_overview'] = $pro_overview;
            $formArray['specifications'] = $Specifications;
            $formArray['models'] = $Models;
            $formArray['resources'] = $resources;
            $formArray['accessories'] = $Accessories;
            $formArray['created_at'] = $date;
            $formArray['featured_product'] = $featured_product;
            $this->db->where('id', $productid);
            $this->db->update('products', $formArray);
            $variaton = array();
            $variaton['color'] = $producttitle; 
            $variaton['images'] = $pname;
            $variaton['colorcode'] = $qty;
        
            $this->db->where('id', $productid);
            $this->db->update('products', $formArray);
            //  print_r( $formArray['description']);die();
            $this->session->set_flashdata('success','Product Updated Succesfully');
            redirect('admin/product/ProductController');
        }else{
            $this->load->view('admin/product/editproduct',$data);
        }
    }


    public function viewProduct(){
      $productid = $this->uri->segment(5);
      $data['products'] = $this->Productmodel->getProductbyid($productid);
      $this->load->view('admin/product/viewproduct',$data);
    }
    
    function exportToExcel(){
        $this->load->library('excel');
        $objPHPExcel = new PHPExcel();
         
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Product Title');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Product Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Price');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Model No');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Part Cord');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Overview');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Category id');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Sub category');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'image');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Sale Message');
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Product Overview');
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Specifications');
        $objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Models');
        $objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Manuals + resources');
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Accessories');
        
        $product = $this->db->get('products');
        $productss =$product->result_array();
        $i=2;
        $sno = 1;
        foreach($productss as $produtesh){
            $imgArr = explode(",",$produtesh['image']);
            $imageurl = "";
            foreach($imgArr as $key => $value){
                $imageurl .= base_url("assets/images/products/").$value.",";
            }
            $imageurl = rtrim($imageurl,",");
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $i, $produtesh['product_title']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $i, $produtesh['pname']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $i, $produtesh['price']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $i, $produtesh['model_no']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $i, $produtesh['part_code']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $i, $produtesh['overview']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $i, $produtesh['category']);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $i, $produtesh['sub_category']);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $i, $imageurl);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $i, $produtesh['sales']);
            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $i, $produtesh['product_overview']);
            $objPHPExcel->getActiveSheet()->SetCellValue('L' . $i, $produtesh['specifications']);
            $objPHPExcel->getActiveSheet()->SetCellValue('M' . $i, $produtesh['models']);
            $objPHPExcel->getActiveSheet()->SetCellValue('N' . $i, $produtesh['resources']);
            $objPHPExcel->getActiveSheet()->SetCellValue('O' . $i, $produtesh['accessories']);
        $i++;
        $sno++;
        }
        
        $filename = "Product". date("Y-m-d-H-i-s").".csv";
//          $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
//   header('Content-Type: application/vnd.ms-excel');
//   header('Content-Disposition: attachment;filename="Employee Data.xls"');
//   $object_writer->save('php://output');
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output');
    }
    
    public function exportCs(){
        $this->load->library('excel');
        $product = $this->db->get('products');
        $productss =$product->result_array();
        
        $delimiter=",";
        // $fields = array("S.no","Name","Price","Discount","Color","Keyfeature","Warrenty","Description","Created_at");
        $fields = array("S.no","Item No","Product Title","Name","Price","Discount","Color","Keyfeature","Warrenty","Description","Created_at");
        $f = fopen( 'php://output', 'Excel' );
        fputcsv($f,$fields,$delimiter);
        
        
        $i=1; foreach($productss as $produtesh){
        // $lineData = array($i,$produtesh['pname'],$produtesh['price'],$produtesh['discount'],$produtesh['color'],$produtesh['feature'],$produtesh['warrenty'],$produtesh['description'],$produtesh['created_at']);    
        $lineData = array($i,$produtesh['id'],$produtesh['product_title'],$produtesh['pname'],$produtesh['price'],$produtesh['discount'],$produtesh['color'],$produtesh['warrenty']);

      
       // ob_start();
         fputcsv($f,$lineData,$delimiter);
         
         $i++;
         
         
        }
        // die();
        
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=csv_export.csv');
        fpassthru($f);
        
        // $html.='</table>';
        // header('Content-Type:application/xls');
        // header('Content-Disposition:attachment;filename=report.xls');
        // echo $html;
        // die();
    }
    
    
    
    
    public function getSubcategory(){
        
        $subid = $this->input->post('id');
        
        $subcateg = $this->Productmodel->getSubcategory($subid);
        // $this->db->where('category',$subid);
        // $subc = $this->db->get('subcategory');
        //  = $subc->result_array();
       
    
        echo json_encode($subcateg); 
        
    }
    
    public function deleteall(){
        
       $id = $this->input->post('id');
       $this->db->where('id',$id);
       $this->db->delete('products');    
    }
    
    public function addAnother(){
        $count1 = count($_FILES['images']['name']);
        $colrimages="";
        for($i=0;$i<$count1;$i++){
   
          if(!empty($_FILES['images']['name'][$i])){
   
            $_FILES['file']['name'] = $_FILES['images']['name'][$i];
            $_FILES['file']['type'] = $_FILES['images']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['images']['error'][$i];
            $_FILES['file']['size'] = $_FILES['images']['size'][$i];
  
            $config['upload_path'] = base_url(); 
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['images']['name'][$i];
   
            $this->load->library('upload',$config); 
   
            if($this->upload->do_upload('file')){
              $colerinae = $this->upload->data();
              $colorlaineg = $colerinae['file_name'];
              $colrimages.=$colorlaineg.',';
            //   $data['totalFiles'][] = $filename;
            }
          }
   
        }
        $totalimages = rtrim($colrimages,",");
        return $totalimages;
        // $exploderd = explode(",",$totalimages);
        // print_r($totalimages);
        // die();
        
        
    }
}
// ob_end_flush();

?>