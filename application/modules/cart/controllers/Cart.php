<?php

class Cart extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_cart');
		$this->load->library('session');
        $this->load->model('Mod_admin1');
        $this->load->library("cart");
    }
    function index(){
        $data["listCart"] = $this->cart->contents();
        $data['content'] ='view_index';
        return $this->load->view("template_home",$data);
    }

	function add(){
        $id = $this->uri->segment(3);
        $product = $this->Mod_cart->getProductById($id);
        if($this->input->post("quantity")){
            $cart = array(
                'id' =>$id,
                'name'=>$product["product_name"],
                'qty'=>$this->input->post("quantity"),
                'price'=>$product['product_price'],
                'thumbnail'=>$product["product_thumbnail"]
            );
            $this->cart->insert($cart);
            redirect(base_url()."product/detail/".$id);
        }else{
             $cart = array(
                'id' =>$id,
                'name'=>$product["product_name"],
                'qty'=>1,
                'price'=>$product['product_price'],
                'thumbnail'=>$product["product_thumbnail"]
            );
            $this->cart->insert($cart);
            redirect(base_url()."product/detail/".$id);
        }

	}

    function delete($rowid){
        
        $cat = array("rowid" => $rowid, "qty" =>0);
        $this->cart->update($cat);
        redirect(base_url()."cart");
    }

}