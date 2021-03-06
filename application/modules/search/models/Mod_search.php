<?php

class Mod_search extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
   function getCategory(){
    $this->db->where("category_parent <",1);
    $this->db->order_by("category_id",'DESC');
    $qr =$this->db->get('category');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->result_array();
        }
   }

   function getSubCategory($id){
   
    $qr = $this->db->where("category_parent",$id);
    $qr = $this->db->get("category");
    if($qr->num_rows() == 0){
        return 0;
    }else{
        return $qr->result_array();
    }
   }

   function findCategoryInProduct($id){
    $this->db->like("category_id",$id.',','both');
    $this->db->limit(8);
    $this->db->order_by("product_id","DESC");
    $qr = $this->db->get("products");
    if($qr->num_rows() == 0){
      return 0;
    }else{
      return $qr->result_array();
    }
   }

   function getCategoryById($id){
    $this->db->where("category_id",$id);
    $qr = $this->db->get("category");
    if($qr->num_rows() == 0){
      return 0;
     }else{
      return $qr->row_array();
     }
   }

   function getProductBySearch($search){
    if($search != null){
      $this->db->like("product_name",$search);
    }
    $this->db->order_by('product_id','DESC');
    $qr = $this->db->get("products");
    if($qr->num_rows() == 0){
      return 0;
    }else{
      return $qr->result_array();
    }

   }
    public function get_total() 
    {
        return $this->db->count_all("products");
    }
}