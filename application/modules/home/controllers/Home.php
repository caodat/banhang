<?php

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_home');
		$this->load->library('session');
        $this->load->model('Mod_admin1');
    }

	function index(){
        $data['category'] = $category = $this->Mod_home->getCategory();
        $data['content'] = 'view_index';
        $this->load->view("template_home",$data);
	}

}