<?php

class Mod_product extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
   function getCategoryById($id){
    $this->db->where("category_id",$id);
    $qr =$this->db->get('category');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->row_array();
        }
   }

   function getProductDetail($id){
    $this->db->where("product_id",$id);
    $qr = $this->db->get("products");
    if($qr->num_rows() == 0){
      return 0;
    }else{
      return $qr->row_array();
    }
   }

   function getProductNew(){
    $this->db->order_by("product_id","DESC");
    $this->db->limit(8);
    $qr = $this->db->get("products");
    if($qr->num_rows() == 0){
      return 0;
    }else{
      return $qr->result_array();
    }
   }
}