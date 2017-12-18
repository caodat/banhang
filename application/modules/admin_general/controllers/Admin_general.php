<?php
class Admin_general extends CI_Controller{
    function  __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_general');
        $this->load->model('Mod_admin1');
        $this->load->library('session');
        $this->Mod_admin1->check_login();
    }
    function index() {
        $data['option']= $this->Mod_general->get_option();
        $data['content']='view_index';
        $this->load->view("template_admin",$data);
    }

    function add(){
        //$this->load->library('form_validation');
        $autoload = 1;
        
        if($this->input->post('submit')){

            if($this->input->post('autoload')==1){
                $autoload=1;
            }else{
                $autoload=0;
            }
            $option_name =$this->input->post('option-name');
            $check =$this->Mod_general->check_option_name($option_name);
            if($check >0) {
                $data['error'] = 'Đã tồn tại option name';
                $data['content']='new_add';
                $this->load->view("template_admin",$data);
            }else{
            $data = array(
                'option_name'   =>  $this->input->post('option-name'),
                'option_value'  =>  $this->input->post('option-value'),
                'option_autoload'      =>  $autoload
          );
          // Add option  
          $this->Mod_general->insert_option($data);
          redirect(base_url().'/admin_general');
         }
        }
        else {
            $data['content']='new_add';
            $this->load->view("template_admin",$data);
         }       
    }
    function update(){
       $id=$this->uri->segment(3); 
       $data['option']=$this->Mod_general->option_detail($id);
       if($data['option']==0){
           redirect(base_url().'/admin_general');
       }
        if($this->input->post('submit')){
            if($this->input->post('autoload')==1){
                $autoload=1;
            }else{
                $autoload=0;
            }
           
            $data_update = array(
               'option_name'   =>  $this->input->post('option-name'),
                'option_value'  =>  $this->input->post('option-value'),
                'option_autoload'      =>  $autoload
            );
        $this->Mod_general->update_option($id,$data_update);
        redirect(base_url().'/admin_general');
        } else
        { 
            $data['content']='new_update';
            $this->load->view("template_admin",$data);
        }
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        $this->Mod_general->delete_option($id);
        redirect(base_url().'/admin_general');
    }
}