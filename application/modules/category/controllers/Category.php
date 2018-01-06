<?php

class Category extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mod_category');
		$this->load->library('session');
        $this->load->library("pagination");
        $this->load->model('Mod_admin1');
        $this->load->library("cart");
    }
	function detail(){
        $id = $this->uri->segment(3);
        $limit_per_page = 8;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $total_records = $this->Mod_category->get_total();
        if ($total_records > 0) 
        {
            $data["product"] = $this->Mod_category->getProductByCategoryId($limit_per_page, $start_index,$id);
            $config['base_url'] = base_url() . 'category/detail/'.$id;
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 4;
            $this->pagination->initialize($config);
            $data["links"] = $this->pagination->create_links();
        }
        $data["categoryDetail"] = $this->Mod_category->getCategoryById($id);
        $data['category'] = $this->Mod_category->getCategory();
        $data['content'] = 'view_index';
        $this->load->view("template_home",$data);
	}

}