<?php 
class Accessories extends CI_Controller
{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    
    function index(){
      $acces = $this->db->get('accesories');
      $data['accesries'] = $acces->result_array();
      $this->load->view('admin/accessories/allaccessories',$data);  
    }
    
    function addAccessories(){
            
            $this->load->view('admin/accessories/addaccessories');
        
    }
    
    public function deleteall(){
        
       $id = $this->input->post('id');
       $this->db->where('id',$id);
       $this->db->delete('accesories');    
       echo 1;
    //   redirect('admin/accessories/Accessories/');
    }
    
    function store(){
                $date = date('Y-m-d H:i:s');
                $config['upload_path']          = 'admin-assets/uploads/accessories/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('images'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $errors = $error['error'];
                        $this->session->set_flashdata('failure',$errors);
                        $this->load->view('admin/accessories/addaccessories');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $imagename = $data['upload_data']['file_name'];
                      
                }
            
            
          $formArray['pname'] = $this->input->post('productname');
          $formArray['price'] = $this->input->post('price');
          $formArray['qty'] = $this->input->post('qty');
          $formArray['discount'] = $this->input->post('discount');
          $formArray['category'] = $this->input->post('category');
          $formArray['description'] = $this->input->post('description');
          $formArray['keyfeatures'] = $this->input->post('keyfeatures');
          $formArray['image'] = $imagename;
          $formArray['created_at'] = $date;
          $this->db->insert('accesories',$formArray);
          $this->session->set_flashdata('success','Accessories added succesfully!');
          redirect('admin/accessories/Accessories/addAccessories');
        
    }
    
    function delAccessories(){
      $id = $this->input->post('id');
      $this->db->where('id',$id);
      $this->db->delete('accesories');
      
        
    }
    
    
    function editAccessories(){
        $accesid = $this->uri->segment(5);
       $this->db->where('id',$accesid);
       $acesss = $this->db->get('accesories');
       $data['accesries'] = $acesss->result_array(); 
       $this->load->view('admin/accessories/editaccessories',$data);
    }
    
    function exportToExcel(){
        $this->load->library('excel');
        $objPHPExcel = new PHPExcel();
         
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Product Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Quntity');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Price');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Discount');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Category');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'keyfeatures');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Image URL');
        
        $product = $this->db->get('accesories');
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
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $i, $produtesh['pname']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $i, $produtesh['qty']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $i, $produtesh['price']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $i, $produtesh['discount']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $i, $produtesh['category']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $i, $produtesh['keyfeatures']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $i, $imageurl);
        $i++;
        $sno++;
        }
        
        $filename = "Product". date("Y-m-d-H-i-s").".csv";

        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output');
    }
    
    
    
    function updateAccessories(){
        $accesid = $this->uri->segment(5);
        
        $date = date('Y-m-d H:i:s');
        
        if(!empty($_FILES['images']['name'])){
        
        $config['upload_path']          = 'admin-assets/uploads/accessories/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('images'))
        {
                $error = array('error' => $this->upload->display_errors());
                $errors = $error['error'];
                $this->session->set_flashdata('failure',$errors);
                $this->load->view('admin/accessories/addaccessories');
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $imagename = $data['upload_data']['file_name'];
              
        }}else{
            
            $imagename = $this->input->post('oldimage');
        }
    
    
      $formArray['pname'] = $this->input->post('productname');
      $formArray['price'] = $this->input->post('price');
      $formArray['qty'] = $this->input->post('qty');
      $formArray['discount'] = $this->input->post('discount');
      $formArray['category'] = $this->input->post('category');
      $formArray['description'] = $this->input->post('description');
      $formArray['keyfeatures'] = $this->input->post('keyfeatures');
      $formArray['image'] = $imagename;
      $this->db->where('id',$accesid);
      $this->db->update('accesories',$formArray);
      $this->session->set_flashdata('success','Accessories updated succesfully!');
      redirect('admin/accessories/Accessories');
    }
    
    
}