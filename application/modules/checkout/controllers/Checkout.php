<?php

class Checkout extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_checkout');
		$this->load->library('session');
        $this->load->model('Mod_admin1');
        $this->load->library("cart");
    }
    function index(){
        $data["listCart"] = $this->cart->contents();
        
        return $this->load->view("view_index",$data);
    }
}