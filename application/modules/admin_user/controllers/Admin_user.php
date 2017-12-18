<?php

class Admin_user extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_user');
        $this->load->model('Mod_admin1');
        $this->load->library('session');
		$this->load->helper('form');
		$this->Mod_admin1->check_login();
    }

	function index(){
		$data['user']	=$this->Mod_user->get_user();
	    $data['content']='view_index';
	    $this->load->view("template_admin",$data);
	}
	function add(){
		$data['er']='';
       	$this->load->library('form_validation');   
        $this->form_validation->set_rules('username','Không được để trống','required');
        $this->form_validation->set_rules('password','Không được để trống','required');
		if($this->form_validation->run()){
		$username=$this->input->post('username');
		$c=$this->Mod_user->check_user1($username);
		if($c>0){
			$data['er']='Đã tồn tài username trong hệ thống';
			$data['content']='view_add';
			$this->load->view('template_admin',$data);
			}

			else{

				$data =array(
				'user_name'		=>	$username,
				'user_fullname'	=>	$this->input->post('user-fullname'),
				'user_pass'		=>	md5($this->input->post('password')),
				);

				$this->Mod_user->insert_user($data);

				redirect(base_url().'admin_user');

				}
		}else{
			$data['content']='view_add';
			$this->load->view('template_admin',$data);
		}
	}

    function update(){
		$data['er']='';
		$id=$this->uri->segment(3);
		$data['user']=$user=$this->Mod_user->user_detail($id);
		$this->load->library('form_validation');   
        $this->form_validation->set_rules('username','Không được để trống','required');
        $this->form_validation->set_rules('password','Không được để trống','required');
		if($this->form_validation->run()){
			$username=$this->input->post('username');
			$c =$this->Mod_user->check_update($username,$user['username']);
			if($c==0){
				$data =array(
					'username'=>$username,
					'password'=>md5($this->input->post('password')),
					'user_fullname'	=>$this->input->post('user-fullname')
					);
					$this->Mod_user->update_user($id,$data);
					redirect(base_url().'admin/logout');
				}
				else {
					$data['er']='Đã tồn tại username trong hệ thống';
					$data['content']='view_update';
					$this->load->view('template_admin',$data);
				}
		}
		else{
		$data['content']='view_update';
		$this->load->view('template_admin',$data);}
    }
   function delete(){
	   $id=$this->uri->segment(3);
       $this->Mod_user->delete_user($id);
	   redirect(base_url().'admin_user');
   }
}