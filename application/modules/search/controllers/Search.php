<?php

class Search extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_search');
		$this->load->library('session');
        $this->load->library("pagination");
        $this->load->model('Mod_admin1');
        $this->load->library("cart");
    }
	function index(){
        if(isset($_GET['query'])){
            $search = $_GET['query'];
        }else{
            $search = null;
        }
       
        $data["product"] = $this->Mod_search->getProductBySearch($search);
           
        //$data["categoryDetail"] = $this->Mod_search->getCategoryById($id);
        $data['category'] = $this->Mod_search->getCategory();
        $data['content'] = 'view_index';
        $this->load->view("template_home",$data);
	}

}