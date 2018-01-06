<?php

class Mod_checkout extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
     function getProductById($id){
      $this->db->where("product_id",$id);
      $qr = $this->db->get("products");
      if($qr->num_rows() == 0){
        return 0;
      }else{
        return $qr->row_array();
      }
   }
}