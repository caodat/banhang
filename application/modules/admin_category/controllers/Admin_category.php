<?php
class Admin_category extends CI_Controller{
    function  __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_category');
        $this->load->model('Mod_admin1');
        $this->load->library('session');
        $this->Mod_admin1->check_login();
    }
    
    function index() {
        $data['category']    =   $this->Mod_category->get_category();
        $data['content']='view_index';
        $this->load->view("template_admin",$data);
    }
    
    function add(){
        $data["list_category"] = $this->Mod_category->get_category();
        
        if($this->input->post('submit')){
            if($this->input->post("category_in_menu")){
                $categoryInMenu = 1;
            }else{
                $categoryInMenu =0;
            }
             if($this->input->post("category_in_home")){
                $categoryInHome = 1;
            }else{
                $categoryInHome =0;
            }
            $data = array(
                'category_name'         =>   $this->input->post('category_name'),
                'category_parent'       =>   $this->input->post('category_parent'),
                'category_description'  =>   $this->input->post('category_description'),
                'category_in_menu'      =>   $categoryInMenu,
                'category_in_home'      =>   $categoryInHome

          );
            // insert dữ liệu vào csdl
          $this->Mod_category->insert_category($data);
          redirect(base_url().'admin_category');
        }
        else {
            
            $data['content']='new_add';
            $this->load->view("template_admin",$data);
         }    
            
    }
    
    function update(){
       $id=$this->uri->segment(3); 
       $data['category']=$this->Mod_category->category_detail($id);
       if($data['category']==0){
           redirect(base_url().'admin_category');
       }
        $data["list_category"] = $this->Mod_category->get_category_update($id); 
        if($this->input->post('submit')){ 
            if($this->input->post("category_in_menu")){
                $categoryInMenu = 1;
            }else{
                $categoryInMenu =0;
            }
             if($this->input->post("category_in_home")){
                $categoryInHome = 1;
            }else{
                $categoryInHome =0;
            }
            $data_update = array(
                'category_name'         =>   $this->input->post('category_name'),
                'category_parent'       =>   $this->input->post('category_parent'),
                'category_description'  =>   $this->input->post('category_description'),
                'category_in_menu'      =>   $categoryInMenu,
                'category_in_home'      =>   $categoryInHome
            );
        $this->Mod_category->update_category($id,$data_update);
        redirect(base_url().'admin_category');
        } else
        { 
            $data['content']='new_update';
            $this->load->view("template_admin",$data);
        }
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        $this->Mod_category->delete_category($id);
        redirect(base_url().'admin_category');
    }
}