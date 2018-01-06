<?php

class Product extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_product');
		$this->load->library('session');
        $this->load->model('Mod_admin1');
        $this->load->library("cart");
    }

    function index(){

    }
	function detail(){
        $id = $this->uri->segment(3);
        $data["product"] = $this->Mod_product->getProductDetail($id);
        $data["productNew"] = $this->Mod_product->getProductNew();
        $data['content'] = 'view_index';
        $this->load->view("template_home",$data);
	}

}