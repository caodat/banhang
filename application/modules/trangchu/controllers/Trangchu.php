<?php

class Trangchu extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_trangchu');
		$this->load->library('session');
        $this->load->model('Mod_admin1');
    }

	function index(){
        $data['content']='view_index';
        $data['lottery']='view_lottery';
        $data['lotteries']=$this->Mod_trangchu->get_lotteries();
        $this->load->view("template_home",$data);
	}

}