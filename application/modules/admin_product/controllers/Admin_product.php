<?php
class Admin_product extends CI_Controller{
    function  __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_product');
        $this->load->model('Mod_admin1');
        $this->load->library('session');
        $this->load->library("upload");
        $this->Mod_admin1->check_login();
    }
    
    function index() {
        $data['products']    =   $this->Mod_product->get_product();
        $data['content']='view_index';
        $this->load->view("template_admin",$data);
    }
    
    function add(){
        $data["list_category"] = $this->Mod_product->get_list_category();
        if($this->input->post('submit')){

            if (!empty($_FILES)) {
                $file_thumbnail = $this->upload_file('thumbnail');
                $files_gallery = $this->upload_file('gallery');
            } else {
                $file_thumbnail = NULL;
                $files_gallery = NULL;
            }

            if ($this->is_multi($files_gallery)) {
                $gallery = "";
                foreach ($files_gallery as $FileName) {                   
                    $gallery = $gallery.$FileName['file_name'].",";
                }
            } else {
                $gallery = $files_gallery['file_name'];
            }
            $thumbnail = $file_thumbnail['file_name'];
            
            $name = $this->input->post("name");
            $price = $this->input->post("price");
            $description = $this->input->post("description");
            $thumb = $thumbnail;
            $gall = $gallery;
            $category = $this->input->post("category");
            $content = $this->input->post("content");

            $data = array(
                'product_name'  => $name,
                'product_price'  => $price,
                'product_description'  => $description,
                'product_thumbnail'  => $thumb,
                'product_gallery'  => $gall,
                'category_id'  => $category,
                'product_content'  => $content
            );
            $this->Mod_product->insert_product($data);
          redirect(base_url().'admin_product');
        }
        else {
            $data['content']='new_add';
            $this->load->view("template_admin",$data);
         }         
    }
    
    function update(){
        $id=$this->uri->segment(3);
        $data["list_category"] = $this->Mod_product->get_list_category();
        $data['product'] = $product = $this->Mod_product->product_detail($id);
        
        $idGallery = $this->uri->segment(4);
        if($idGallery != ""){
            $arrGallery = $this->Mod_admin1->cutString($product["product_gallery"]);
            unset($arrGallery[$idGallery]);
            $gallery = "";
            foreach($arrGallery as $gl){
                $gallery .= $gl.",";
            }
            $dataRemove = array(
                'product_gallery' => $gallery
            );
            $this->Mod_product->update_product($id,$dataRemove);
            redirect(base_url()."admin_product/update/".$id);
        }
       
        if($data['product']==0){
           redirect(base_url().'admin_product');
        }
        
        if($this->input->post('submit')){
            $name = $this->input->post("name");
                $price = $this->input->post("price");
                $description = $this->input->post("description");
                $category = $this->input->post("category");
                $content = $this->input->post("content");
            if(!empty($_FILES['thumbnail']['name'])){
                
                $dataUpdate = array(
                    'product_name'  => $name,
                    'product_price'  => $price,
                    'product_description'  => $description,
                    'category_id'  => $category,
                    'product_content'  => $content
                );
                if(!empty($_FILES['thumbnail']['name'])){
                    $file_thumbnail = $this->upload_file('thumbnail');
                    $thumbnail = $file_thumbnail['file_name'];
                    $thumb = $thumbnail;
                    $dataUpdate['product_thumbnail'] = $thumb;
                 }
                if(!empty($_FILES['gallery']['name'])){
                   $files_gallery = $this->upload_file('gallery');
                    if ($this->is_multi($files_gallery)) {
                    $galleryUpdate = "";
                    foreach ($files_gallery as $FileName) {                   
                        $galleryUpdate = $galleryUpdate.$FileName['file_name'].",";
                    }
                    } else {
                        $galleryUpdate = $files_gallery['file_name'];
                    }
                    $gall = $galleryUpdate.$product["product_gallery"];
                    $dataUpdate['product_gallery'] = $gall;
                }
            }else{
                $dataUpdate = array(
                    'product_name'  => $name,
                    'product_price'  => $price,
                    'product_description'  => $description,
                    'category_id'  => $category,
                    'product_content'  => $content
                );
            }
            print_r($dataUpdate);
            $this->Mod_product->update_product($id,$dataUpdate);
            redirect(base_url().'admin_product');
            
        } else
        { 
            $data['content']='new_update';
            $this->load->view("template_admin",$data);
        }
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        $this->Mod_product->delete_product($id);
        redirect(base_url().'admin_product');
    }
    
    function upload_file($file)
    {
        $this->load->library("upload");
        $upload_cfg['upload_path'] = "uploads/";
        $upload_cfg['encrypt_name'] = TRUE;
        $upload_cfg['allowed_types'] = "gif|jpg|png|jpeg";
/*        $upload_cfg['max_width'] = '1920'; /* max width of the image file */
/*        $upload_cfg['max_height'] = '1080'; /* max height of the image file */
/*        $upload_cfg['min_width'] = '300'; /* min width of the image file */
/*        $upload_cfg['min_height'] = '300'; /* min height of the image file */

        $this->upload->initialize($upload_cfg);

        if ($this->upload->do_upload($file)) {
            $image = $this->upload->data();
            //$this->session->set_flashdata('success_msg', lang('success_msg_edit_cat'));
            return $image;
        } else {
            $msg = $this->form_validation->field_data['file_to_upload']['error'] = $this->upload->display_errors('', '');
            $this->session->set_flashdata('success_msg', $msg);
            redirect(base_url().'admin_product');
        }
    }

     function is_multi($array)
    {
        return (count($array) != count($array, 1));
    }   
}