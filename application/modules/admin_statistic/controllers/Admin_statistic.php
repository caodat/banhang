<?php
class Admin_statistic extends CI_Controller{
    function  __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_statistic');
        $this->load->model('Mod_admin1');
        $this->load->library('session');
        $this->Mod_admin1->check_login();
    }
    
    function index() {
        $data['statistics']    =   $this->Mod_statistic->get_statistic();
        $data['content']='view_index';
        $this->load->view("template_admin",$data);
    }
    
    function add(){

        $data['lotteries']  = $this->Mod_statistic->get_lotteries();
        
        if($this->input->post('submit')){
            if($this->input->post('statistic-show')==1){
                $statistic_show=1;
            }else{
                $statistic_show=0;
            }
            $date = $this->Mod_admin1->get_date($this->input->post('statistic-date'));
            
            $data = array(
                'lottery_id'           =>   $this->input->post('lottery-id'),
                'statistic_date'       =>   $date,
                'statistic_register'   =>   $this->input->post('statistic-register'),
                'statistic_result'     =>   $this->input->post('statistic-result'),
                'statistic_people'     =>   $this->input->post('statistic-people'),
                'statistic_show'       =>   $statistic_show
          );
            // insert dữ liệu vào csdl
          $this->Mod_statistic->insert_statistic($data);
          redirect(base_url().'admin_statistic');
        }
        else {
            
            $data['content']='new_add';
            $this->load->view("template_admin",$data);
         }    
            
    }
    
    function update(){
        $data['lotteries']  = $this->Mod_statistic->get_lotteries();
       $id=$this->uri->segment(3); 
       $data['statistic']=$this->Mod_statistic->statistic_detail($id);
       if($data['statistic']==0){
           redirect(base_url().'admin_statistic');
       }
        
        if($this->input->post('submit')){
            if($this->input->post('statistic-show')==1){
                $statistic_show=1;
            }else{
                $statistic_show=0;
            }
            $date = $this->Mod_admin1->get_date($this->input->post('statistic-date'));
            $data_update = array(
                'lottery_id'           =>   $this->input->post('lottery-id'),
                'statistic_date'       =>   $date,
                'statistic_register'   =>   $this->input->post('statistic-register'),
                'statistic_result'     =>   $this->input->post('statistic-result'),
                'statistic_people'     =>   $this->input->post('statistic-people'),
                'statistic_show'       =>   $statistic_show
            );
        $this->Mod_statistic->update_statistic($id,$data_update);
        redirect(base_url().'admin_statistic');
        } else
        { 
            $data['content']='new_update';
            $this->load->view("template_admin",$data);
        }
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        $this->Mod_statistic->delete_statistic($id);
        redirect(base_url().'admin_statistic');
    }
    
   
}