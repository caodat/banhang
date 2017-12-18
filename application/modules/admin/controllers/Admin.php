<?php
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->model('Mod_admin');
        $this->load->model('Mod_admin1');
        $this->load->library('session'); 

    }
	function index(){
	    if($this->session->userdata('user_sess')==""){
            redirect(base_url().'admin/login');
        }
	    $data['content']='view_index';
	    $this->load->view("template_admin",$data);
	}
	
    function login(){
        if($this->session->userdata('user_sess')!=''){
            redirect(base_url().'admin');
        }

        $data['error'] ='';
        $this->load->library('form_validation');   
        $this->form_validation->set_rules('username','Không được để trống','required');
        $this->form_validation->set_rules('password','Không được để trống','required');
        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $c=$this->Mod_admin1->user($username,$password);
            if($c==0){
                $data['error'] = 'Bạn đã nhập sai tên đăng nhập hoặc mật khẩu';
                $this->load->view('view_login',$data);
            }
            else {
                $array_user = array(
					'id_user'=>$c['id_user'],
                    'user_sess'=>$username,
                    'user_fullname'=>$c['user_fullname']
                );
                $this->session->set_userdata($array_user);
                redirect(base_url().'admin');
            }
        }
        else {
            $this->load->view('view_login',$data);
        }
    } 
   function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'admin/login');
   }
}