<?php

class Product extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_product');
		$this->load->library('session');
        $this->load->model('Mod_admin1');
    }

	function index(){
        $data['category'] = $category = $this->Mod_product->getCategory();
        $data['content'] = 'view_index';
        $this->load->view("template_home",$data);
	}

}