<?php

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_home');
		$this->load->library('session');
        $this->load->model('Mod_admin1');
        $this->load->library("cart");
    }

	function index(){
        $data['category'] = $category = $this->Mod_home->getCategory();
        $data['categoryInHome'] = $this->Mod_home->getCategoryInHome();
        $data['content'] = 'view_index';
        $this->load->view("template_home",$data);
	}

    function contact(){
        $data['content'] = 'view_contact';
        return $this->load->view('template_home',$data);
    }

    function dilivery(){
        $data['content'] = 'view_dilivery';
        return $this->load->view('template_home',$data);
    }

}