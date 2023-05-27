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
        $data['subcategorymini'] = $this->Productmodel->getSubcategoriesmini();

        if(isset($_POST['submit'])){
            $colors = $this->input->post('colorcode');
            //$adnither = $this->addAnother();
            //   $eplodecolto = explode(",",$allcoloesima);
            $description   =   $this->input->post('description');
            $descrt ="";
            foreach ($description as $key => $value){
                $descrt.=$value."|";
            }
            $desctrim = rtrim($descrt,"|");
            $feature   =   $this->input->post('featutes');
            $allfatures="";
            foreach($feature as $key => $features){
                $allfatures.= $features."|";
            }
            $featuretrim = rtrim($allfatures,"|");
            $delivery   =   $this->input->post('delivery');
            $alldelivery="";
            foreach($delivery as $key => $deliveues){
                $alldelivery.= $deliveues."|";
            }
            $deliverytrim = rtrim($alldelivery,"|");
            $warrent   =   $this->input->post('warrenty');
            $allwarrenty="";
            foreach($warrent as $key => $warenties){
                $allwarrenty.= $warenties."|";
            }
            $rrimvarrent = rtrim($allwarrenty,"|");
            
            date_default_timezone_set('Asia/Kolkata');
            $date =  date('Y-m-d H:i:s');
            $pname = $this->input->post('productname');
            $qty = $this->input->post('qty');
            $price = $this->input->post('price');
            $discount =$this->input->post('discount');
            $category =$this->input->post('category');
            $resources = $this->input->post('editor1');
            $subcategory = $this->input->post('subcategory');
            $subcategorymini = $this->input->post('subcategorymin');
        //    print_r($subcategory);die();
            $producttitle = $this->input->post('producttitle');
            $sale = $this->input->post('sale');
            $itemType = $this->input->post('itemType');
            $data = [];
            $count = count($_FILES['files']['name']);
            $allimages="";
            // print_r($_FILES);die();
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
            $allcolro ="";
            foreach($colors as $key => $value){
                // $allcolro.=$value.",";
                $allcolro.= $value.",";
            }
            $allcoloesima = rtrim($allcolro,",");
            
            // print_r($allcoloesima);die();
            $productiages = rtrim($allimages,",");
            $formArray = array();
            $formArray['pname'] = $pname;
            $formArray['qty'] = $qty;
            $formArray['discount'] = $discount;
            $formArray['price'] = $price;
            $formArray['sub_category'] = $subcategory;
            $formArray['sub_category_min'] = $subcategorymini;
            $formArray['product_title'] = $producttitle; 
            $formArray['category'] = $category;
            $formArray['image'] = $productiages;
            $formArray['sales'] = $sale;
            $formArray['item_type'] = $itemType;
            $formArray['color'] = $allcoloesima;
            $formArray['description'] = $desctrim;
            $formArray['feature'] = $featuretrim;
            $formArray['warrenty'] = $rrimvarrent;
            $formArray['delivery'] = $deliverytrim;
            $formArray['resources'] = "";
            $formArray['created_at'] = $date;
            
            // print_r($formArray);die();
            $this->db->insert('products',$formArray);
            $pid = $this->db->insert_id();
            
            $color = $this->input->post('color');
            $colorName = $this->input->post('colorName');
            $imageUrl = $this->input->post('imageUrl');
            
            foreach($colorName as $key => $value){
                $count = count($_FILES['imageFile']['name']);
                $variationImage="";
                for($i=0;$i<$count;$i++){
                    if(!empty($_FILES['imageFile']['name'][$i])){
                        $_FILES['file']['name'] = $_FILES['imageFile']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['imageFile']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['imageFile']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['imageFile']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['imageFile']['size'][$i];
                        $config['upload_path'] = "assets/images/product"; 
                        $config['allowed_types'] = '*';
                        $config['file_name'] = $_FILES['imageFile']['name'][$i];
                        $this->load->library('upload',$config); 
                        if($this->upload->do_upload('file')){
                            $uploadData = $this->upload->data();
                            $filename = $uploadData['file_name'];
                            $variationImage.=$filename.',';
                        //   $data['totalFiles'][] = $filename;
                        }
                    }
                }
                // print_r($variationImage);die();
                $img = explode(',',$imageUrl[$key]);
                if($img > 0){
                    $imageNamee = ""; 
                    
                    foreach($img as $valImage){
                        if($valImage != ""){
                            
                        $imgurl = $valImage; 
                        $imagename= basename($imgurl);
                        $image = file_get_contents($valImage);
                        file_put_contents('assets/images/product/'.$imagename,$image);
                        $imageNamee.= $imagename.",";
                        }
                    }
                    $properImage = rtrim($imageNamee, ',');
                }
                
                $imagesVariation = rtrim($variationImage.$properImage,",");
                // print_r($count);
                //  echo "</br>";
                
                $variation['pid'] = $pid;
                $variation['color'] = $color[$key];
                $variation['images'] = $imagesVariation;
                $variation['colorcode'] = $value;
                // print_r($variation);die();
                $this->db->insert('color',$variation);
            }
            
            $this->session->set_flashdata('success','Product Save Succesfully');
            redirect('admin/product/ProductController');
        }else{
            $this->load->view('admin/product/addProduct',$data);
        }
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
        $data['subcategorymini'] = $this->Productmodel->getSubcategoriesmini();
        $data['products'] = $this->Productmodel->getProductbyid($productid);
        $data['category'] = $this->Productmodel->getCategories();
        $data['color'] = $this->Productmodel->getColorImg($productid);
     
        if(isset($_POST['submit'])){
            //print_r($_POST);die();
            //print_r($productid);die();
            $description   =   $this->input->post('description');
            
            $descrt ="";
            foreach ($description as $key => $value) {
                $descrt.=$value."|";
            }
            
            $desctrim = rtrim($descrt,"|");
          
            $feature   =   $this->input->post('featutes');
            $allfatures="";
            foreach($feature as $key => $features){
                $allfatures.= $features."|";
            }
            $featuretrim = rtrim($allfatures,"|");
            $delivery   =   $this->input->post('delivery');
            $alldelivery="";
            foreach($delivery as $key => $deliveues){
                $alldelivery.= $deliveues."|";
            }
            $deliverytrim = rtrim($alldelivery,"|");
            $warrent   =   $this->input->post('warrenty');
            $allwarrenty="";
            foreach($warrent as $key => $warenties){
                $allwarrenty.= $warenties."|";
            }
            $rrimvarrent = rtrim($allwarrenty,"|");
            date_default_timezone_set('Asia/Kolkata');
            $date =  date('Y-m-d H:i:s');
            $pname = $this->input->post('productname');
            $qty = $this->input->post('qty');
            $price = $this->input->post('price');
            $discount =$this->input->post('discount');
            $category =$this->input->post('category');
            $descripti = $this->input->post('description');
            $subcategory = $this->input->post('subcate');
            $subcategorymini = $this->input->post('subcategorymin');
            $color  =$this->input->post('color');
            $hdnimage  =$this->input->post('hdnimage');
            $sale = $this->input->post('sale');
            $producttitle = $this->input->post('producttitle');
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
                        $config['upload_path'] = "assets/images/product"; 
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

            //  print_r($productiages);die();
            $formArray = array();
            $formArray['product_title'] = $producttitle; 
            $formArray['pname'] = $pname;
            $formArray['qty'] = $qty;
            $formArray['discount'] = $discount;
            $formArray['price'] = $price;
            $formArray['sales'] = $sale;
            $formArray['category'] = $category;
            $formArray['sub_category'] = $subcategory;
            $formArray['sub_category_min'] = $subcategorymini;
            $formArray['color'] = $color;
            $formArray['image'] = $productiages;
            $formArray['description'] = $desctrim;
            $formArray['feature'] = $featuretrim;
            $formArray['warrenty'] = $rrimvarrent;
            $formArray['delivery'] = $deliverytrim;
            $formArray['created_at'] = $date;
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
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Quntity');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Price');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Discount');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Category id');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Sub category');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Sub category mini');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'image');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Description');
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Feature');
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Color');
        $objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Warrenty');
        $objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Delivery');
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Item No');
        
        $product = $this->db->get('products');
        $productss =$product->result_array();
        $i=2;
        $sno = 1;
        foreach($productss as $produtesh){
            $imgArr = explode(",",$produtesh['image']);
            $imageurl = "";
            foreach($imgArr as $key => $value){
                $imageurl .= base_url("assets/images/product/").$value.",";
            }
            $imageurl = rtrim($imageurl,",");
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $i, $produtesh['product_title']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $i, $produtesh['pname']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $i, $produtesh['qty']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $i, $produtesh['price']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $i, $produtesh['discount']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $i, $produtesh['category']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $i, $produtesh['sub_category']);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $i, $produtesh['sub_category_min']);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $i, $imageurl);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $i, $produtesh['description']);
            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $i, $produtesh['feature']);
            $objPHPExcel->getActiveSheet()->SetCellValue('L' . $i, $produtesh['color']);
            $objPHPExcel->getActiveSheet()->SetCellValue('M' . $i, $produtesh['warrenty']);
            $objPHPExcel->getActiveSheet()->SetCellValue('N' . $i, $produtesh['delivery']);
            $objPHPExcel->getActiveSheet()->SetCellValue('O' . $i, $produtesh['id']);
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

    public function getSubcategorymini(){
        
        $subid = $this->input->post('id');
        
        $subcateg = $this->Productmodel->getSubcategorymini($subid);
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


?>